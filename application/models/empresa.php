<?php
use lib\model\Model;
use lib\comunication\Comunication;

use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryMatchAgainst;


class Empresa extends Model{
	
	public $nombre 		= null;
	public $usuario   	= null;
	public $direccion	= null;
	public $telefono	= null;
	public $estado		= null;
        public $celular		= null;
        public $email		= null;
        public $web		= null;
        public $descripcion	= null;
        public $contactoId	= null;
        public $localidad	= null;
        public $departamento	= null;
        public $pais		= null;
        
        
	public function notify($method=''){
            
            $mail=Factory::create(FactoryModel::getInstance(), 'Mail');
            
//Instancia única del usuario autenticado.
            $Auth = \Zend_Auth::getInstance();
            
//Instancia de una nueva comunicación
            $notificar  = Comunication::getInstance();
            $mail->estado='Peniente';
            $mail->asunto=$this->nombre."(Nueva Empresa)";
            $mail->usuario=$Auth->getIdentity()->usr;
            $mail->texto="<div><h1>Nueva Empresa</h1>El usuario ".$Auth->getIdentity()->usr." ha creado el siguiente Empresa <H1>".utf8_decode($this->nombre)."</h1></div>";
            $mail->create();
            $Destinatario=Factory::create(FactoryModel::getInstance(), 'Destinatario');
            $Destinatario->addDestinatario($Auth->getIdentity()->email,$mail);
            
            //$notificar->send();
        }

        public function obtenerRubros($result){
            try{
                $retorno=null;
                //var_dump($result);die;
                $Empresarubro   = Factory::create(FactoryModel::getInstance(), 'Empresarubro');
                $Rubro          = Factory::create(FactoryModel::getInstance(), 'Rubro');
                foreach ($result as $key => $value) {
                    $idEmp=$result[$key]['id'];
                    $Q  = new Query($Rubro,$Empresarubro);
                    $Q->add(new QueryAnd('empresaId',$idEmp));
                    $retorno[]=$this->fetch($Q);
                }
                
                return $retorno;
            }catch (\Exception $e){
                    die($e->getMessage());
            }	
	}
        public function obtenerEnlaces($result){
            try{
                $retorno=null;
                foreach ($result as $key => $value) {
                    $idEmp=$result[$key]['id'];
                    $Enlace = Factory::create(FactoryModel::getInstance(), 'Enlace');
                    //$Rubro = Factory::create(FactoryModel::getInstance(), 'Rubro');
                    $Q      = new Query($Enlace);
                    $Q->add(new QueryAnd('empresaId',$idEmp));
                
                    //$Q->prepare($this);
                    $retorno[]=$this->fetch($Q);
                
                    
                }
               return $retorno;
            }catch (\Exception $e){
                    die($e->getMessage());
            }	
	}
    
        public function existsLoc($param=null){
            
            if(!is_null($param)){
                $parametros = explode(' ',$param);
                $Empresa      = Factory::create(FactoryModel::getInstance(), 'Empresa');
                $Q          = new Query($this,null,null,'DISTINCT localidad');
                $Q->add(new QueryMatchAgainst('localidad',$param));
                //$Q->prepare($this);
                //echo $Q->query;
                $empresas=$this->fetch($Q);
                
                $resultado=null;
                foreach ($empresas as $key => $value) {
                    $resultado[]=$value[localidad];
                    
                }
                $resultado= array_map(strtolower, $resultado);
                $retorno='';
                foreach ($parametros as $key => $value) {
                    
                    if (array_search(strtolower($value), $resultado)) {
                        $retorno.=",". $value;
                    }
                    
                } 
                if (array_search(strtolower($param), $resultado)) {
                       $retorno.=",". $value;
                        
                }
                return substr($retorno, 1);
            }else{
                return null;
            }
            return null;
        }
        
            }

