<?php
use lib\model\Model;
use lib\comunication\Comunication;

use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;


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
            $mail->estado='Pendiente';
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
                foreach ($result as $key => $value) {
                    $idEmp=$result[$key]['empresaId'];
                    $Empresarubro   = Factory::create(FactoryModel::getInstance(), 'Empresarubro');
                    $Rubro          = Factory::create(FactoryModel::getInstance(), 'Rubro');
                    $Q              = new Query($Rubro,$Empresarubro);
                    $Q->add(new QueryAnd('empresaId',$idEmp));
                
                    //$Q->prepare($this);
                    //Asigno resultado a la vista
                    $retorno[]=$this->fetch($Q);
                
                    
                }
                //var_dump($retorno);die;
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
                $Q          = new Query($Empresa);
                $Q->prepare($this);
                $empresas=$this->fetch();
                $resultado=null;
                foreach ($empresas as $key => $value) {
                    $resultado[]=$value[localidad];
                }
                foreach ($parametros as $key => $value) {
                    
                    if (in_array($value, $resultado)) {
                        return $value;
                    }
                } 
                if (in_array($param, $resultado)) {
                        return $param;
                        
                }
            }else{
                return null;
            }
            return null;
        }
        
            }

