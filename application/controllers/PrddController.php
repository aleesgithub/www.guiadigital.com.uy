<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;

class PrddController extends Controller{
	
	public function index(){
		try{
			$this->getMessages();
                        $search = $this->getParam('search');
                        $proyectoId=$this->getParam('proyectoId');
                        $Q = new Query($this->Model);
                        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                             $this->View->assign('jquery', TRUE); 
                        }
                        
                        if($search){
                                $Q->add(new QueryLike(array(
                                'nombre'=>$this->getParam('search'),
                                'texto' =>$this->getParam('search'),
                                'estado'=>$this->getParam('search')),'',false));
			}
                        
                        if($proyectoId){
				$Q->add(new QueryAnd('proyectoId',$proyectoId));
				$Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
				$Q2 = new Query($Proyecto);
				$Q2->add(new QueryAnd('id',$proyectoId));
				$Proyecto->load($Q2);
				$this->View->assign('proyecto', $Proyecto->toArray());
			}
                        
                        //Paginación.
                        $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
			$Q->add($P);
                        $Q->prepare($this->Model);
                        /*$User = Factory::create(FactoryModel::getInstance(), 'User');
                        $Q2 = new Query($User);
                        $User->load($Q2);
                        $this->View->assign('users', $User->fetch());    
                         */    
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
                    //hidden o tomar valor del boton submit para saber si
                    //postearon formulario.

                    $do_submit = $this->getParam('do_submit');
                    $proyectoId=$this->getParam('proyectoId');
                    if($proyectoId){
				
				$Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
				$Q2 = new Query($Proyecto);
				$Q2->add(new QueryAnd('id',$proyectoId));
				$Proyecto->load($Q2);
				$this->View->assign('proyecto', $Proyecto->toArray());
                    }
                if($do_submit){
                    //cargo modelo con parametros del form
                    $this->params2Model($this->Model);
                    //campos obligatorios
                    //$this->required($this->Model, array('nombre','texto'));
                    //$this->Model->codRef = 999;
                    $this->Model->estado = 'Activo';
                    $this->Model->notaId = 1;
                    $validator=new Validator();
                   
                    $validator->validoModel($this->Model);
 //die;
                    $this->Model->create();
                    //$this->Model->update();
                   
                    //invoco create heredado de Model
                   
                    $this->clean($this->Model);
                    $this->View->assign('msg', array('success', 'El registro se ha guardado correctamente'));
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }
            $this->Model->proyectoId=$proyectoId;
            $this->View->assign('model', $this->Model->toArray());
            
            //Roels para seleccionar.
            $this->View->assign('table_options', array(
                                                        Convenio => 'Convenio',
                                                        Producto => 'Producto',
                                                        Promocion =>'Promocion'
                                                    ));

            
            //$this->View->assign('msg', array('success', 'El registro se ha guardado correctamente'));
            $this->View->display();	
	}
	
	public function eliminar(){		
			$id = $this->getParam('id');				
			if(empty($id)){
				header("location:/nota/index/1");
				exit();
			}
				
			$this->Model->id = $id;
                        $Q=new Query($this->Model);
                        $Q->add(new QueryAnd('id',$id));
			if(!$this->Model->load($Q)){
                            header("location:/proyecto/index");
                            exit();
                        }else{
                            $this->Model->delete();
                        }
			
			$this->_helper->flashMessenger->addMessage('success');
			$this->_helper->flashMessenger->addMessage('El registro fue eliminado correctamente');
                       
			header("location:/nota/index/");
			exit();
        }
	
	public function actualizar(){
		try{
                    //hidden o tomar valor del boton submit para saber si
                    //postearon formulario.
                    $id=$this->getParam('id');

                    $do_submit = $this->getParam('do_submit');
                    $Nota = Factory::create(FactoryModel::getInstance(), 'Nota');
                    $this->View->assign('notas', $this->model2List($Nota->fetch(),'id','nombre','texto','estado','notaId','usuario'));
                    $this->Model->id = $id;
                    $Q = new Query($this->Model);
                    if($id){
                            $Q->add(new QueryAnd('id',$id));				
                    }
                    if(!$this->Model->load($Q)){

                        throw new \Exception('Identificador no valido');
                    }
                     //Obtengo la información del proyecto de referencia.
                    $Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
                    $Q2 = new Query($Proyecto);
                    $Q2->add(new QueryAnd('id',$this->Model->proyectoId));
                    $Proyecto->load($Q2);
                    $this->View->assign('proyecto', $Proyecto->toArray());

                    if($do_submit){
                        //cargo modelo con parametros del form
                        $this->params2Model($this->Model);
                        //campos obligatorios
                        //$this->required($this->Model, array('usr','pwd','role','nombre','apellido','email','language'));
                        //invoco create heredado de Model
                        $validator=new Validator();
                        $validator->validoModel($this->Model);
                        $this->Model->update();
                        $this->View->assign('model', $this->Model->toArray());
                        $this->View->assign('msg', array('success', 'El registro ha sido actualizado correctamente'));

                    }
		}
		catch (\Exception $e){
			$this->View->assign('msg', array('error',$e->getMessage()));
		}
               
		$this->View->assign('model', $this->Model->toArray());
                $this->View->assign('id', $this->Model->id);
                
                $this->View->display();	
	}
}