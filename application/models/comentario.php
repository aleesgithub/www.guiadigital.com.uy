<?php
use lib\model\Model;
use lib\comunication\Comunication;

use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryIn;

use lib\factory\Factory;
use lib\factory\FactoryModel;

require_once 'prdd.php';
class Comentario extends Prdd{
	
	
	
	public $notaId		= null;
	
        
        
        public function notify($method, $nombre, $usuario){
            
            $User = Factory::create(FactoryModel::getInstance(), 'User');
            $Q2 = new Query($User);
            $Q2->add(new QueryAnd('usr',$usuario));
            $User->load($Q2);

            //Instancia única del usuario autenticado.
            $Auth = \Zend_Auth::getInstance();
            //Instancia de una nueva comunicación
            $notificar  = new Comunication();
            //Remitente
            $notificar->setFrom($Auth->getIdentity()->email,$Auth->getIdentity()->nombre." ".$Auth->getIdentity()->apellido);
            //Asunto del mensaje
            $notificar->setSubject($nombre."(Nuevo comentario)");
            //Cuerpo del mensaje
            $notificar->setBodyHtml("<div><h1>Comentario</h1>El usuario ".$Auth->getIdentity()->usr." ha realizado un comentario sobre el proyecto <H1>".utf8_decode($nombre)."</h1></div>");
            //Destinatario del mail
            
            $notificar->addTo($User->email);
            //Con copia oculta.
            //$notificar->addBcc('alejandro.esteche@secom.com.uy');
            $notificar->send(); 
        
        }
        //Metodo para obtener los usuarios colaboradores del proyecto.
        public function fetchColaboradores(){
             //Filtro los usuarios colaboradores de un proyecto u otro campo pasado como parámetro
             // si se pasa el proyectiId ('proyectoId','85')el método devolverá todos los usuarios que participaron del proyecto 85.
            $Colaborador=Factory::create(FactoryModel::getInstance(), 'Colaborador');
            $Q = new Query($Colaborador);
            $valor="'".$this->proyectoId."'";
            $Q->add(new QueryIn('proyectoId',$valor,'usuario'));
            $Q->prepare();
            return $Colaborador->fetch();
        }
}

