<?php
use lib\model\Model;
use lib\comunication\Comunication;

use lib\factory\Factory;
use lib\factory\FactoryModel;


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
        public $rubroId		= 1;
        public $contactoId	= 1;
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
}

