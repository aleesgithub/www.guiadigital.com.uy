<?php
namespace lib\exception;

class LogSms extends \Exception{
	
	public $phone = null;
	
	public function log(){
		try{
			if (is_null($this->phone)){
				throw new Exception('Especificar telefono');
			}
			//sigo, simula que envia este mensaje por SMS.
			echo 'SMS '.$this->getMessage().' ocurrio en '.$this->getFile().
			' en linea '.$this->getLine().' enviando a '.$this->phone;
		}
		catch (Exception $e){
			die($e);
		}
	}
}

?>