<?php
use lib\comunication\Comunication;
use lib\model\Model;

class Colaborador extends Model{
	
	public $usuario     = null;
	public $proyectoId  = null;
        public $estado      = null;
        
        
        public function notify($method,$nombre='',$email){
        //Instancia única del usuario autenticado.
            
             
        $Auth = \Zend_Auth::getInstance();
        //Instancia de una nueva comunicación
        $notificar  = new Comunication();
        //Remitente
        $notificar->setFrom($Auth->getIdentity()->email,$Auth->getIdentity()->nombre." ".$Auth->getIdentity()->apellido);
        //Asunto del mensaje
        $notificar->setSubject($nombre."(Incorporación al Proyecto)");
        //Cuerpo del mensaje
        $notificar->setBodyHtml("<div><h1>Proyecto - $nombre</h1>El usuario ".$Auth->getIdentity()->usr." lo participa del nuevo proyecto en desarrollo.</div>");
        //Destinatario del mail
        $notificar->addTo($email);
        //Con copia oculta.
        //$notificar->addCc('alejandro.esteche@secom.com.uy');
        $notificar->send(); 
       
    }
}