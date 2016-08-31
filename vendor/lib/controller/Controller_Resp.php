<?php
//Comportamiento generico a todas mis clases controladoras.

namespace lib\controller;
use lib\view\HtmlView;
use lib\factory\Factory;
use lib\factory\FactoryController;
use lib\factory\FactoryModel;
use lib\security\Security;
use lib\patterns\ServiceLocator;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;
//use lib\factory\Factory;
//use lib\factory\FactoryModel;
use lib\helpers\Validator;

class Controller extends \Zend_Controller_Action {
	
	//Representa una vista.
	public $View  	 = null;
	public $Model 	 = true;
	public $Security = null;
	public $Tr       = null;
        
        public function getParams(){
		return $this->getAllParams();
	}
	
	public function preDispatch(){
                $this->getMessages();
		$this->Security = new Security();
		if(!$this->Security->autorizar($this)){
			$this->_helper->flashMessenger->addMessage('error');
			$this->_helper->flashMessenger->addMessage('Acceso denegado...');
			$this->_redirect("login", array('exit'=>true));			
		}
//                $Auth = \Zend_Auth::getInstance();
//                if(!is_object($Auth) || is_null($Auth->getIdentity())){
//                    $this->_helper->flashMessenger->addMessage('error');
//                    $this->_helper->flashMessenger->addMessage('Acceso denegado...');
//                    $this->_redirect("login", array('exit'=>true));
//                    exit();
//                }
	}
	public function postDispatch(){
		return;
	}
	public function getPage(){
		$page = (is_null($this->getParam('page')))?1:$this->getParam('page');
		return (int)$page;
	}
	public function getUrl(){
		$url =  '';
		foreach($this->getRequest()->getParams() as $key=>$value){
			if(!in_array($key, array('module','page'))){
				if(strtolower($key) == 'controller'){
					$controller = (is_null($key))?'/index/':"/$value/";
                                        //$controller = (is_null($key))?DS.'index'.DS:DS.$value.DS;
					continue;
				}
				if(strtolower($key) == 'action'){
					$action = (is_null($key))?'index/':"$value/";
                                        //$action = (is_null($key))?'index'.DS:$value.DS;
					continue;
				}
				$value = urlencode($value);
				$url .= "$key/$value/";
                                //$url .= $key.DS.$value.DS;
	
			}
		}
		$controller = (is_null($controller))?'/index/':$controller;
                //$controller = (is_null($controller))?DS.'index'.DS:$controller;
		$action 	= (is_null($controller))?'index/':$action;
                //$action 	= (is_null($controller))?'index'.DS:$action;
		$url 		= $controller.$action.$url;
                
		return $url;
	}
	
	public function init(){
		//no renderizar controller/action
		$this->_helper->viewRenderer->setNoRender(true);
		$this->View 	= new HtmlView();
		$this->Config   = ServiceLocator::getConfig();
		$Auth = \Zend_Auth::getInstance();
		$this->Tr= ServiceLocator::getTranslate($Auth->getIdentity()->language);
			
		try{
			if ($this->Model) {
				$this->Model = Factory::create(FactoryModel::getInstance(), $this->getName());				
			}
			$this->View->setTemplate($this);
			$this->View->assign('controller', $this);
			$this->View->assign('user_data', $Auth->getIdentity());
			$this->View->assign('Tr', $this->Tr);
		}
		catch (\Exception $e){
			$this->View->error($e);	
			exit();
		}	
	}
	
	public function params2Model(\lib\model\Model $M, $exclude = array()){
		//recorro request
            
		foreach($this->getParams() as $att=>$val){
			if(property_exists($M, $att) && !in_array($att, $exclude)){
                            
                            $M->$att = $val;
			}
		}		
	}
	
	public function model2List($rows,$key,$value){
		$result = array();
		if(is_array($rows) && !is_null($rows)){
			//que exista key y value en rows
			foreach($rows as $row){
				$result[$row[$key]] = $row[$value];
			}
		}
		return $result;
	}
	public function required(\lib\model\Model $M, $required){
		if(is_array($required) && !empty($required)){
			foreach ($required as $att){
				if(empty($M->$att) || is_null($M->$att)){
					throw new \Exception('Completar campos requeridos para continuar');
				}
			}
		}
	}
	
	public function getMessages(){
		$messages = $this->_helper->flashMessenger->getMessages();
		if($messages){
			$this->View->assign('msg', array($messages[0], $messages[1]));
		}		
	}
	
	public function clean(\lib\model\Model $M, $exclude = array()){
		$atts  = $M->toArray();
		foreach($atts as $att=>$val){
			if(!in_array($att, $exclude) && !is_object($att)){
				$M->$att = null;
			}
		}		
	}
	
	//si no quiero agregar palabra Action a cada metodo de controlador
	public function __call($method, $args){
		$pattern = "/^(.*?)Action$/";
		preg_match($pattern, $method, $match);
		$method_name = $match[1];
		if(method_exists($this, $method_name)){
			return $this->$method_name();
		}
		throw new \Exception("No existe $method en ".get_class($this));
	}
	
	public function getName(){
		return $this->getRequest()->getControllerName();
		/*
		$prefix = FactoryController::PREFIX;
		$pattern = "/^$prefix(.*?)$/";
		preg_match($pattern, get_class($this), $m);
		return $m[1];
		*/
	}
        public function index($Q){
            try{
			$this->getMessages();
                        $search = $this->getParam('search');
                        //$proyectoId=$this->getParam('proyectoId');
                        
                        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                             $this->View->assign('jquery', TRUE); 
                        }
                        
                        if($search){
                                $Q->add(new QueryLike(array(
                                'texto' =>$this->getParam('search'),
                                'estado'=>$this->getParam('search')),'',false));
			}
                        //Paginación.
                        $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
			$Q->add($P);
                        $Q->prepare($this->Model);
                        //Asigno resultado a la vista
			$this->View->assign('rows', $this->Model->fetch($Q));
                        $this->View->assign('P', $P);
                        $this->View->assign('search', $search);
                        $this->View->assign('page', $this->getPage());
			$this->View->assign('controlador', $this->getName());
                        $this->View->display();
		}
		catch (\Exception $e){
			die($e->getMessage());
		}
        }
}
