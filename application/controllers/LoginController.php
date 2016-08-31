<?php
use lib\controller\Controller;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;

class LoginController extends Controller{
	
	public function init(){
		$this->Model = false;
		parent::init();
	}
	public function logout(){
		\Zend_Auth::getInstance()->clearIdentity();
		$this->_helper->flashMessenger->addMessage('success');
		$this->_helper->flashMessenger->addMessage('Has cerrado tu sesi&oacute;n.');
		$this->_redirect('index', array('exit'=>true));
	}
	public function index(){
		//si no quiero invocar getMessages() en todos mis index?
		$do_submit = $this->getParam('do_submit');
		$this->View->layout = 'login'; 
		if($do_submit){
			//tomo lo que me pasan en cajas de texto
			$usr = $this->getParam('usr');
			$pwd = $this->getParam('pwd');
			try{
				if($this->Security->login($usr,$pwd)){
					//ToDo:cambiar por redirect
					//Si se autentica ok lo envio a alguna
					//pagina del backend.
					$U = Factory::create(FactoryModel::getInstance(), 'User');
					$Auth = \Zend_Auth::getInstance();
					$Q = new Query($U);
					$Q->add(new QueryAnd('id', $Auth->getIdentity()->id));
					if($U->load($Q)){
						$Zd = new \Zend_Date();
						$U->lastLog = $Zd->toString('yyyy-MM-dd HH:mm:ss');
						$server = $this->getRequest()->getServer();
						$U->lastIp	= $server['REMOTE_ADDR'];
						$U->update();
					}
                                        if($U->estado=='Vigente'){
                                            if($Auth->getIdentity()->role == 'REP'){
                                                header("location:/report/");
                                            }else{
                                                //$refer = $_SERVER['HTTP_REFERER'];
                                               
                                                //if(($refer)){
                                                  //  header("location:$refer");
                                                //}else{
                                                    
                                                    header("location:/index/");
                                                //}
                                                
                                            }
                                            exit();
                                        }else{
                                            \Zend_Auth::getInstance()->clearIdentity();
                                            $this->_helper->flashMessenger->addMessage('error');
                                            $this->_helper->flashMessenger->addMessage('Usuario no habilitado');
                                            $this->_redirect('/login/', array('exit'=>true));
                                        }
                                        
				}
				$this->View->assign('msg', array('error','Usuario o Password incorrecto'));
			}
			catch (\Exception $e){
				$this->View->error($e);
				exit();
			}
		}
		$this->View->assign('token', $this->_helper->Token(20));
		$this->View->assign('usr', $usr);
		$this->View->assign('pwd', $pwd);
		$this->View->display();
	}
}	