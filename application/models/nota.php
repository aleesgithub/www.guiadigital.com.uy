<?php
use lib\model\Model;
use lib\comunication\Comunication;

use lib\factory\Factory;
use lib\factory\FactoryModel;
require_once 'proyecto.php';
require_once 'prdd.php';
class Nota extends Prdd{
	
	
	public $nombre 		= null;
	public $notaId		= null;
        public $acceso          = null;
	
    public function defaultNota($id, $usuario){
        //Array que contiene los nombres de las notas comunes a todos los proyectos
        $names= Array('Propósito','Requisitos','Objetivo de Calidad al que Contribuye','Caracteristicas','Criterios de Evaluación','Validación','Verificación','Revisión');
        $excepcionacces=Array('Validación','Verificación','Revisión');
        //Genero las notas minimas que tiene que contener un proyecto
        foreach ($names as $value) {

            $this->nombre       = $value;
            $this->proyectoId   = $id;
            $this->usuario      = $usuario;
            $this->texto        = $value;
            $this->estado       = "Activo";
            $this->acceso       = "Publico";
            if( in_array($value,$excepcionacces)){
                $this->acceso       = "Privado";
            }
            $this->notaId       = 1;
            $this->create();
        }
    }
    public function notify($method='',$nombre=''){
            
            $mail=Factory::create(FactoryModel::getInstance(), 'Mail');
            
//Instancia única del usuario autenticado.
            $Auth = \Zend_Auth::getInstance();
            
//Instancia de una nueva comunicación
            $notificar  = Comunication::getInstance();
            $mail->estado='Pendiente';
            $mail->asunto=$this->nombre."(Nueva Nota)";
            $mail->usuario=$Auth->getIdentity()->usr;
            $mail->texto="<div><h1>Nueva Nota</h1>El usuario ".$Auth->getIdentity()->usr." ha creado la siguiente Nota al proyecto ".$nombre."<p>".utf8_decode($this->texto)."</p></div>";
            $mail->create();
            $Destinatario=Factory::create(FactoryModel::getInstance(), 'Destinatario');
            $Destinatario->addDestinatario($Auth->getIdentity()->email,$mail);
            
            $notificar->send();
        }
//    public function notify($method,$nombre=''){
//        //Instancia única del usuario autenticado.
//        $Auth = \Zend_Auth::getInstance();
//        //Instancia de una nueva comunicación
//        $notificar  = new Comunication();
//        //Remitente
//        $notificar->setFrom($Auth->getIdentity()->email,$Auth->getIdentity()->nombre." ".$Auth->getIdentity()->apellido);
//        //Asunto del mensaje
//        $notificar->setSubject($nombre."(Nueva Nota)");
//        //Cuerpo del mensaje
//        $notificar->setBodyHtml("<div><h1>Nueva Nota</h1>El usuario ".$Auth->getIdentity()->usr." ha creado la siguiente Nota al proyecto ".$nombre."<p>".utf8_decode($this->texto)."</p></div>");
//        //Destinatario del mail
//        $notificar->addTo($Auth->getIdentity()->email);
//        //Con copia oculta.
//        $notificar->addBcc('alejandro.esteche@secom.com.uy');
//        $notificar->send(); 
//        
//    }
    
    public function obtenerProyectName($proyectoId){
        
        if($proyectoId){
          
            $proyecto=new Proyecto();
        }
    }
}

