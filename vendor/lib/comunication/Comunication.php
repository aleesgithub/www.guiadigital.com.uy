<?php
//Comportamiento generico a todas mis clases controladoras.

namespace lib\comunication;


class Comunication extends \Zend_Mail {
	public  $mail = null;
        public  $transport = null;
        static private $instance = null;
        
        public function __construct(){
            
            $this->mail = new \Zend_Mail("UTF-8"); //Usaremos codificación UTF-8 para el mensaje
            
            $this->transport  = new \Zend_Mail_Transport_Smtp("mail.secom.com.uy",array(
                                                                                    "auth"=> "login",
                                                                                    "port"=> 587,
                                                                                    "username"=>"sysavv3@secom.com.uy",
                                                                                    "password"  => "Sys2015"
                                                                                    )
                                                            );
            
            
        }
        public function send() {
            parent::addHeader('MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=UTF-8' . "\r\n".$this->getHeaders());
            parent::send($this->transport);
        }
        public function addHeader($head) {
            parent::addHeader($head);
        } 
        public function addBcc($email) {
            parent::addBcc($email);
        }
        public function addTo($email, $name = '') {
            parent::addTo($email, $name);
        }
        public function addCc($email, $name = '') {
            parent::addCc($email, $name);
        }
        public function setFrom($email, $name = null) {
            parent::setFrom($email, $name);
        }
        public function setReplyTo($email, $name = null) {
            parent::setReplyTo($email, $name);
        }
        public function setBodyHtml($html, $charset = null, $encoding = 'UTF-8') {
            parent::setBodyHtml($html, $charset, $encoding);
        }
        public function addAttachment($path) {
            //
            //Leemos el contenido del archivo a adjuntar y lo encapsulamos en un objeto Zend_Mime_Part
            $mime = new Zend_Mime_Part(file_get_fontents($path));
            $mime->disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
            $mime->encoding    = Zend_Mime::ENCODING_BASE64;
            $mime->filename    = pathinfo($path, PATHINFO_BASENAME);

            //Adjuntar el archivo al correo
            //$this->mail->addAttachment($mime);
            parent::addAttachment($mime);
        }
        public static function getInstance(){
        if(!isset(self::$instance)){
            $C = __CLASS__;
            self::$instance = new $C;
        }
        return self::$instance;
    }
        
}
