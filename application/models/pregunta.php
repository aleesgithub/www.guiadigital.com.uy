<?php
use lib\model\Model;
use lib\comunication\Comunication;

class Pregunta extends Model{
	
	
	public $proyectoId   	= null;
	public $usuario		= null;
	public $texto		= null;
	public $tipo		= null;
        public $estado		= null;
	
	public function notify($method,$nombre=''){
        //Instancia única del usuario autenticado.
        $Auth = \Zend_Auth::getInstance();
        //Instancia de una nueva comunicación
        $notificar  = new Comunication();
        // enlace directo http://192.168.2.161/pregunta/responder/?preguntaId=85&proyectoId=11
        //<input type="button" onclick="location.href='/prueba.php'" name="buttonejecutar" id="buttonejecutar" value="Ejecutar Script" />
        //$button="<input type=\"button\" onclick=\"location.href='http://www.sysav.com.uy:8181/pregunta/responder/?preguntaId=".$this->id."&proyectoId=".$this->proyectoId."'\" name=\"buttonejecutar\" id=\"buttonejecutar\" value=\"Ejecutar Script\" />";
         $button="<a href=\"http://192.168.2.161/pregunta/responder/?preguntaId=".$this->id."&proyectoId=".$this->proyectoId."\">Responder</a>";
        //Remitente
        $notificar->setFrom($Auth->getIdentity()->email,$Auth->getIdentity()->nombre." ".$Auth->getIdentity()->apellido);
        //Asunto del mensaje
        $notificar->setSubject($nombre."(Nueva Pregunta)");
        //Cuerpo del mensaje
        $notificar->setBodyHtml("<div><h1>Nueva Pregunta</h1>El usuario ".$Auth->getIdentity()->usr." ha formulado la siguiente consulta sobre el proyecto ".$nombre."<p>".utf8_decode($this->texto)."</p><br>$button</div>");
        //Destinatario del mail
        $notificar->addTo($Auth->getIdentity()->email);
        //Con copia oculta.
        $notificar->addBcc('alejandro.esteche@secom.com.uy');
        $notificar->send(); 
        
    }
}

