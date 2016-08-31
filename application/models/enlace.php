<?php
use lib\model\Model;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryIn;
use lib\factory\Factory;
use lib\factory\FactoryModel;

use lib\comunication\Comunication;
class Enlace extends Model{
	
	
    public $empresaId   	= null;
    public $tipo        	= null;
    public $enlace		= null;
   	
    public function notify($method,$nombre='',$textoResp=''){
        
    }
    public function obtenerPregunta(){
        $Pregunta = Factory::create(FactoryModel::getInstance(), 'Pregunta');
        $Q3= new Query($Pregunta);
        $Q3->add(new QueryAnd('id',$this->preguntaId));
        $Pregunta->load($Q3);
        return $Pregunta;
    }
    public function addEnlace($allenlace,$modelEmpresa){
        if(!empty($allenlace)){
            if(preg_match('#^;.*#s',$allenlace)){
             $allenlace=substr($allenlace,1);
            }
            $enlaces= explode(";", $allenlace);

                foreach ($enlaces as $value) {
                $this->empresaId=$modelEmpresa->id;
                $this->enlace=$value;
                $this->tipo=$this->obtenerTipo($value);
                $this->create();
            }
        }
    }
    public function modifyEnlace($allenlace,$modelEmpresa){
        
        $Q= new Query($this);
        $Q->add(new QueryAnd('empresaId',$modelEmpresa->id));
        $Q->prepare($this);
        $result=$this->fetch($Q);
                
        foreach ($result as  $value) {
            $this->id=$value['id'];
            $this->delete();
        }
        $this->addEnlace($allenlace, $modelEmpresa);
    }
    private function obtenerTipo($enlace){
        $tipo ="enlace";
        $tipos = array("twitter", "facebook", "linkedin", "google","youtube");
        
        foreach ($tipos as $tipoenlace){
            $pos=false;
            $pos = strpos($enlace, $tipoenlace);
            if ($pos) {
                $tipo=$tipoenlace;
            }
        }
        

        
        return $tipo;
    }
    
    //diferentes metodos de corroborar URL
    public function url_exists( $url = NULL ) {

        if(( $url == '' ) ||( $url == NULL ) ){
            return false;
        }

        $options['http'] = array(
            'method' => "HEAD",
            'ignore_errors' => 1,
            'max_redirects' => 0
        );
        $body = @file_get_contents($url, NULL, stream_context_create($options));

        if( isset($http_response_header) ) {
            sscanf($http_response_header[0], 'HTTP/%*d.%*d %d', $httpcode);

            //Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
            $accepted_response = array(200,301,302);
            if( in_array( $httpcode, $accepted_response ) ) {
                return true;
            } else {
                return false;
            }
         } else {
             return false;
         }
    }
    public function url_exists_get_header( $url = NULL ) {

        if(( $url == '' ) ||( $url == NULL ) ){
            return false;
        }

        $headers = @get_headers( $url );
        sscanf($headers[0], 'HTTP/%*d.%*d %d', $httpcode);

        //Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
        $accepted_response = array(200,301,302);
        if( in_array( $httpcode, $accepted_response ) ) {
            return true;
        } else {
            return false;
        }
    }
    public function url_exists_curl( $url = NULL ) {

        if(( $url == '' ) ||( $url == NULL ) ){
            return false;
        }

        $ch = curl_init($url);

        //Establecer un tiempo de espera
        curl_setopt($ch,CURLOPT_TIMEOUT,5);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);

        //establecer NOBODY en true para hacer una solicitud tipo HEAD
        curl_setopt($handle, CURLOPT_NOBODY, true);
        //Permitir seguir redireccionamientos
        curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true);
        //recibir la respuesta como string, no output
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $data = curl_exec($ch);

        //Obtener el código de respuesta
        $httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        //cerrar conexión
        curl_close($ch);

        //Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
        $accepted_response = array(200,301,302);
        if( in_array( $httpcode, $accepted_response ) ) {
            return true;
        } else {
            return false;
        }

    }


}

