<?php
use lib\controller\Controller;


class ErrorController extends Controller{
	
	public function init(){
		$this->Model = false;
		parent::init();
	}
	
	public function error(){
		$errors = $this->_getParam('error_handler');
		$exception = $errors->exception;
		$this->View->error($exception);
	}
	
}