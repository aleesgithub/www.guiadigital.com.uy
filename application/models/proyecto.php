<?php
use lib\model\Model;
use lib\comunication\Comunication;

use lib\factory\Factory;
use lib\factory\FactoryModel;


class Proyecto extends Model{
	
	public $nombre 		= null;
	public $usuario   	= null;
	public $codRef		= null;
	public $tipo		= null;
	public $estado		= null;
        
	public function notify($method=''){
            
            $mail=Factory::create(FactoryModel::getInstance(), 'Mail');
            
//Instancia única del usuario autenticado.
            $Auth = \Zend_Auth::getInstance();
            
//Instancia de una nueva comunicación
            $notificar  = Comunication::getInstance();
            $mail->estado='Pendiente';
            $mail->asunto=$this->nombre."(Nuevo Proyecto)";
            $mail->usuario=$Auth->getIdentity()->usr;
            $mail->texto="<div><h1>Nuevo Proyecto</h1>El usuario ".$Auth->getIdentity()->usr." ha creado el siguiente Proyecto <H1>".utf8_decode($this->nombre)."</h1></div>";
            $mail->create();
            $Destinatario=Factory::create(FactoryModel::getInstance(), 'Destinatario');
            $Destinatario->addDestinatario($Auth->getIdentity()->email,$mail);
            
            if($notificar->send()){
                throw new Exception('La notificación no pudo ser entregada a todos los destinatarios');
            } 
        }
}

