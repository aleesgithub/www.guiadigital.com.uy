<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryOrder;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;

class PrivilegioController extends Controller{
	
	public function index(){
		try{
                        $Auth = \Zend_Auth::getInstance();
                            
			$this->getMessages();
                        $search = $this->getParam('search');
                        $Q= new Query($this->Model);
                        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                             $this->View->assign('jquery', TRUE); 
                        }
                        
                        if($search){
                            $Q->add(new QueryLike(array(
                                'rolRol'=>$this->getParam('search'),
                                'controller'=>$this->getParam('search'),
                                'method'=>$this->getParam('search')),'',false));
			}
                        
                        $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
			$Q->add($P);
                        $order=array('id','controller','method');
                
                        $Q->add(new QueryOrder('','',$order,'','asc'));
                        
                        $Q->prepare($this->Model);
                        
			//Asigno resultado a la vista
			$this->View->assign('rows', $this->Model->fetch($Q));
                        $this->View->assign('P', $P);
                        $this->View->assign('search', $search);
                        $this->View->assign('page', $this->getPage());
			//Muestro template
			$this->View->display();
		}
		catch (\Exception $e){
			die($e->getMessage());
		}		
	}
	
	public function crear(){
            try{
                $do_submit = $this->getParam('do_submit');
                
                if($do_submit){
                    //cargo modelo con parametros del form
                    $this->params2Model($this->Model);
                    $this->Model->controller= $this->getParam('controller2');
                    //campos obligatorios
                    $this->required($this->Model, array('rolRol','controller'));
                    if($this->Model->method=='')$this->Model->method=Null;
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    $this->Model->create();
                    $this->clean($this->Model);
                    $this->View->assign('msg', array('success', 'Se agregaron los privilegios al Rol'));
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }
            //Roels para seleccionar desde la base.
            $Rol=Factory::create(FactoryModel::getInstance(), 'Rol');
            $Q3 = new Query($Rol);
            $this->View->assign('roles', $this->model2List($Rol->fetch(),'rol','leyenda'));
            $this->View->assign('rolRol', $this->Model->rolRol);
            $this->View->assign('model', $this->Model->toArray());
            
            $this->View->assign('titulo', "Agregar privilegios a un  ");
            $this->View->assign('subtitulo', "Rol");
            $this->View->display();	
	}
	
	public function eliminar(){		
			$id = $this->getParam('id');				
			if(empty($id)){
				header("location:/privilegio/index");
				exit();
			}
			$this->Model->id = $id;
                        $Q=new Query($this->Model);
                        $Q->add(new QueryAnd('id',$id));
			if(!$this->Model->load($Q)){
                            header("location:/privilegio/index");
                            exit();
                        }else{
                            $this->Model->delete();
                        }
			
			$this->_helper->flashMessenger->addMessage('success');
			$this->_helper->flashMessenger->addMessage('Privilegio eliminado correctamente');
                       
			header("location:/privilegio/index/");
			exit();
        }
	
	public function actualizar(){
            
		try{
                $id=$this->getParam('id');
                $do_submit = $this->getParam('do_submit');
                $this->Model->id = $id;
                $Q = new Query($this->Model);

                if($id){
                        $Q->add(new QueryAnd('id',$id));				
                }
                if(!$this->Model->load($Q)){
                    throw new \Exception('Identificador no valido');
                }
                if($do_submit){
                        $this->params2Model($this->Model);
                        $this->Model->controller= $this->getParam('controller2');
                        $this->required($this->Model, array('rolRol','controller'));
                        if($this->Model->method=='')$this->Model->method=Null;
                        $this->Model->update();
                        $this->View->assign('model', $this->Model->toArray());
                        
                        $this->View->assign('msg', array('success', 'Privilegio actualizado correctamente'));
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }

            $this->View->assign('model', $this->Model->toArray());
            $this->View->assign('id', $this->Model->id);
            $this->View->assign('titulo', "Actualización de ");
            $this->View->assign('subtitulo', "Privilegios");
            
//Roels para seleccionar desde la base.
            $Rol=Factory::create(FactoryModel::getInstance(), 'Rol');
            $Q3 = new Query($Rol);
            $this->View->assign('roles', $this->model2List($Rol->fetch(),'rol','leyenda'));
            $this->View->assign('rolRol', $this->Model->rolRol);
            
            //$this->View->assign('id', $this->Model->id);
            $this->View->display();	
	}
        public function mostrarArray(){
            //PRUEBA PARA mostrar array anidados
            
            $array = array(
                "1" => array(
                            "1.1" => "aa",
                            "1.2" => "ab",
                            "1.3" => "ac",
                            "1.4" => array(
                                        "1.4.1" => "ada",
                                        "1.4.2" => "adb",
                                        "1.4.3" => array(
                                                    "1.4.3.1" => "adca",
                                                    "1.4.3.2" => "adcb",
                                                    "1.4.3.3" => "adcc",
                                                    "1.4.3.4" => "adcd",
                                                ),
                                        "1.4.4" => "add",
                                        "1.4.5" => "ade"
                                    ),
                            "1.5" => "ae"
                        ),
                "2" => "b",
                "3" => "c"
            );
            $this->printArray($array);
            //var_dump($array);die;
        }
       
}