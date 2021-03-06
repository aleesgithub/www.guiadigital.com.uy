<?php
use lib\model\Model;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryIn;
use lib\factory\Factory;
use lib\factory\FactoryModel;

use lib\comunication\Comunication;
class Destinatario extends Model{
	
	
    public $mailId   	= null;
    public $email   	= null;
    public $estado		= null;
    public $tipo		= null;
    public $lectura   	= '0000-00-00 00:00:00';
	
    public function notify($method,$nombre='',$textoResp=''){
        //Instancia única del usuario autenticado.
            
            $Auth = \Zend_Auth::getInstance();
            //Instancia de una nueva comunicación
            $notificar  = new Comunication();

        //Obtengo creenciales del usuario a quien se asigna la respuesta.               
              
            //Remitente
            $notificar->setFrom($Auth->getIdentity()->email,$Auth->getIdentity()->nombre." ".$Auth->getIdentity()->apellido);
            //Asunto del mensaje
            
            if($method=='PreguntaController::responder'){
                $Pregunta=$this->obtenerPregunta();
                $User = Factory::create(FactoryModel::getInstance(), 'User');
                $Q2 = new Query($User);
                $Q2->add(new QueryAnd('usr',$Pregunta->usuario));
                $User->load($Q2);
                $notificar->setSubject($nombre."(Respondieron tu pregunta)");
                //Cuerpo del mensaje
                $notificar->setBodyHtml("<div><h1>Respuesta</h1>El usuario ".$Auth->getIdentity()->usr." le ha respondido a su consulta sobre el proyecto ".$nombre."<p>RESPUESTA:<Br>".utf8_decode($this->texto)."</p></div>");
                $notificar->addTo($User->email);
                $notificar->addCc($Auth->getIdentity()->email);
             
            }else{
                $User = Factory::create(FactoryModel::getInstance(), 'User');
                $Q2 = new Query($User);
                $Q2->add(new QueryAnd('usr',$this->usuario));
                $User->load($Q2);
                $notificar->setSubject($nombre."(Nueva Pregunta)");
                //Cuerpo del mensaje
                $notificar->setBodyHtml("<div><h1>Pregunta</h1>El usuario ".$Auth->getIdentity()->usr." le ha formulado la siguiente consulta sobre el proyecto ".$nombre."<p>".utf8_decode($textoResp)."</p></div>");                  
                //Destinatario del mail
                $notificar->addTo($User->email);
                $notificar->addCc($Auth->getIdentity()->email);
            }
            //Con copia oculta.
            
            //$notificar->send(); 
        
    }
    public function obtenerPregunta(){
        $Pregunta = Factory::create(FactoryModel::getInstance(), 'Pregunta');
        $Q3= new Query($Pregunta);
        $Q3->add(new QueryAnd('id',$this->preguntaId));
        $Pregunta->load($Q3);
        return $Pregunta;
    }
    public function addDestinatario($allto,$modelMeil){
        if(preg_match('#^;.*#s',$allto)){
         $allto=substr($allto,1);
        }
        $destinosTo= explode(";", $allto);
        $Auth = \Zend_Auth::getInstance();
        //Instancia de una nueva comunicación
        $notificar  = Comunication::getInstance();
        //Remitente
        $notificar->setFrom($Auth->getIdentity()->email,$Auth->getIdentity()->nombre." ".$Auth->getIdentity()->apellido);
        //Asunto del mensaje
        $notificar->setSubject($modelMeil->asunto);
        
        $notificar->setBodyHtml("<div><img src='http://192.168.2.161/img/logosysav.png' width='135' height='61'/></div>".$modelMeil->texto);
        foreach ($destinosTo as $value) {
            $this->mailId=$modelMeil->id;
            $this->email=$value;
            $this->estado='Pendiente';
            $this->tipo='Para';
            $notificar->addTo($value);
            
            $this->create();
        }
        
            $notificar->send(); 
       
    }
	
}

