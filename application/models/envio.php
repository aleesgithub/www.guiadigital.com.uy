<?php
use lib\model\Model;
use lib\comunication\Comunication;

class Envio extends Model{
	
	
	public $mail		= null;
	public $modo      	= null;
	public $read		= null;
	public $estado		= null;
	public $mailId		= null;
	
        public function notify($method){
            //Instancia única del usuario autenticado.
            $Auth = \Zend_Auth::getInstance();
            //Instancia de una nueva comunicación
            $notificar  = new Comunication();
            //Remitente
            $notificar->setFrom($Auth->getIdentity()->email,$Auth->getIdentity()->nombre." ".$Auth->getIdentity()->apellido);
            //Asunto del mensaje
            $notificar->setSubject($this->nombre."(Nuevo Proyecto)");
            //Cuerpo del mensaje
            $notificar->setBodyHtml("<div><h1>Nuevo Proyecto</h1>El usuario ".$Auth->getIdentity()->usr." ha creado la siguiente Proyecto <H1>".utf8_decode($this->nombre)."</h1></div>");
            //Destinatario del mail
            $notificar->addTo($Auth->getIdentity()->email);
            //Con copia oculta.
            $notificar->addBcc('alejandro.esteche@secom.com.uy');
            $notificar->send(); 
        
        }
}

