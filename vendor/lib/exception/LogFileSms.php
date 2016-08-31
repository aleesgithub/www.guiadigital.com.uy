<?php
namespace lib\exception;
use lib\exception\LogSms;

class LogFileSms extends LogSms {
	
	public function log(){
		//Llamo a log de LogSMS.
		parent::log();
		$content = date("Y-m-d H:i:s").':'.$this->getMessage()."\r\n";
		//Escribo log.
		file_put_contents('log.txt', $content, FILE_APPEND);
	}

	public function __toString(){
		return $this->getMessage();
	}
}

?>