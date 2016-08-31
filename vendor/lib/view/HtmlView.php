<?php
namespace lib\view;
use lib\interfaces\ViewInterface;

class HtmlView implements ViewInterface{
	
	private $smarty   = null;
	private $template = null;
	
	public $layout	  = null;
	
	public function __construct(){
		$path_smarty = VENDOR.DIRECTORY_SEPARATOR.'smarty/libs/Smarty.class.php';
		
		require_once $path_smarty;
		$this->smarty = new \Smarty();
		$this->smarty->template_dir 	= TEMPLATES.DIRECTORY_SEPARATOR;
		$this->smarty->compile_dir		= TEMPLATES.DIRECTORY_SEPARATOR.'compiles/';
	}
	
	public function debug(){
		$this->smarty->debugging = true;
	}
	
	public function error(\Exception $e){
		$this->template = 'layout/error.tpl';
		$this->assign('e', $e);
		$this->display();	
	}
	
	public function assign($var, $val){
		$this->smarty->assign($var,$val);
	}
	
	public function setTemplate($C, $template = null){
		if(is_null($template)){
			$template = (is_null($C->getParam('action')))?'index':$C->getParam('action');
		}
		$file_name = strtolower($template).'.tpl';
		$dir_name  = strtolower($C->getName()).DIRECTORY_SEPARATOR;
		$path	   = $dir_name.$file_name;
		$this->template = $path;
	}
	
	public function setContent(){
		$this->smarty->assign('content', $this->template);
	}
	
	public function display(){
		$this->setContent();
		$path = ($this->layout)?$this->layout:'backend';
		$path .= DIRECTORY_SEPARATOR.'layout'.DIRECTORY_SEPARATOR.'layout.tpl';
		
		$this->smarty->display($path);
	}
        public function fetch(){
            $this->setContent();
		$path = ($this->layout)?$this->layout:'backend';
		$path .= DIRECTORY_SEPARATOR.'layout'.DIRECTORY_SEPARATOR.'layout.tpl';
		return $this->smarty->fetch($path);
	}
}
