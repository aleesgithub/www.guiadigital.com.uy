<?php
namespace lib\system;
use Zend_Controller_Front;
use lib\helpers\Token;
use lib\helpers\Validator;
class Bootstrap {
	
	private $FrontController = null;
	
	function __construct($request){

                try{
			$this->getEnvError();
			set_include_path(VENDOR.PATH_SEPARATOR.get_include_path());
                        
			\Zend_Controller_Action_HelperBroker::addHelper(new Token());
			\Zend_Controller_Action_HelperBroker::addHelper(new Validator());
                        $this->FrontController = Zend_Controller_Front::getInstance();
			//Asigno mis controladores a ZEND
                        $this->FrontController->setControllerDirectory(APP.DS.'controllers');
                        $this->FrontController->dispatch();
                      
		}	
		catch(\Exception $e){
			die($e->getMessage());
		}
	}
        //setea manejo de errores e identifica si es produccion o testing 
	private function getEnvError(){
                $env  = getenv('APPLICATION_ENV');
		$env  = strtolower($env);
		$file = "errors_$env";
		$path = APP.DS.'config'.DS.$file.'.php';
		if(file_exists($path)){
			require_once $path;
		}
		else{
			//intento por IP
			$ip = getenv('SERVER_ADDR');
			$file = "errors_$ip";
			$path = APP.DS.'config'.DS.$file.'.php';
			if(file_exists($path)){
                            require_once $path;
			}else{
                            throw new \Exception("File $file not found...");
			}
		}
	}
}