<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;
use lib\dao\query\QueryOrder;

class ComunicadoController extends Controller{
	
	public function index(){
		try{
			$this->getMessages();
                        $search = $this->getParam('search');
                        $proyectoId=$this->getParam('proyectoId');
                        $Q = new Query($this->Model);
                        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                             $this->View->assign('jquery', TRUE); 
                        }
                        
                        $this->View->assign('valparam', $proyectoId);
                        $this->View->assign('nomparam', 'proyectoId');
                        
                        if($search){
                                $Q->add(new QueryLike(array(
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
                        $Q->add(new QueryOrder('','','id','DESC'));
                        $Q->prepare($this->Model);
                        //Asigno resultado a la vista
			$this->View->assign('rows', $this->Model->fetch($Q));
                        $this->View->assign('P', $P);
                        $this->View->assign('search', $search);
                        $this->View->assign('page', $this->getPage());
			//Muestro titúlo el template
                        $this->View->assign('titulo', "Comunicados del Proyecto:");
                        $this->View->assign('subtitulo', $Proyecto->nombre);
                        $this->View->assign('controlador', "Comunicado");
                        
			$this->View->display();
		}
		catch (\Exception $e){
			die($e->getMessage());
		}
//		try{
//			$this->getMessages();
//                        $search = $this->getParam('search');
//                        $proyectoId=$this->getParam('proyectoId');
//                        $Q = new Query($this->Model);
//                        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
//                             $this->View->assign('jquery', TRUE); 
//                        }
//                        
//                        if($search){
//                                $Q->add(new QueryLike(array(
//                                'texto' =>$this->getParam('search'),
//                                'estado'=>$this->getParam('search')),'',false));
//			}
//                        
//                        if($proyectoId){
//				$Q->add(new QueryAnd('proyectoId',$proyectoId));
//				$Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
//				$Q2 = new Query($Proyecto);
//				$Q2->add(new QueryAnd('id',$proyectoId));
//				$Proyecto->load($Q2);
//				$this->View->assign('proyecto', $Proyecto->toArray());
//			}
//                        
//                        //Paginación.
//                        $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
//			$Q->add($P);
//                        $Q->prepare($this->Model);
//			//Asigno resultado a la vista
//			$this->View->assign('rows', $this->Model->fetch($Q));
//                        $this->View->assign('P', $P);
//                        $this->View->assign('search', $search);
//                        $this->View->assign('page', $this->getPage());
//			//Muestro titúlo el template
//                        $this->View->assign('titulo', "Comunicados del Proyecto:");
//                        $this->View->assign('subtitulo', $Proyecto->nombre);
//                         $this->View->assign('controller', "Comunicado");
//			//Muestro template
//			$this->View->display();
//		}
//		catch (\Exception $e){
//			die($e->getMessage());
//		}	
	}
	
	public function crear(){
            try{
                    $do_submit = $this->getParam('do_submit');
                    $proyectoId=$this->getParam('proyectoId');
                    if($proyectoId){
				
				$Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
				$Q2 = new Query($Proyecto);
				$Q2->add(new QueryAnd('id',$proyectoId));
				$Proyecto->load($Q2);
				$this->View->assign('proyecto', $Proyecto->toArray());
                    }
                    $this->View->assign('js','edit');
                if($do_submit){
                    //cargo modelo con parametros del form
                    $this->params2Model($this->Model);
                    //campos obligatorios
                    $this->required($this->Model, array('texto'));
                    //$this->Model->codRef = 999;
                    $this->Model->estado = 'Activo';
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    $this->Model->create();
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
                            header("location:/comunicado/");
                            exit();
			}
			
			$this->Model->id = $id;
                        $Q  = new Query($this->Model);
                        $Q->add(new QueryAnd('id',$id));
			if(!$this->Model->load($Q)){
                            header("location:/comunicado/index");
                            exit();
                        }else{
                            $this->Model->delete();
                        }
			
			$this->_helper->flashMessenger->addMessage('success');
			$this->_helper->flashMessenger->addMessage('El registro fue eliminado correctamente');
                       
			header("location:/comunicado/?proyectoId=".$this->Model->$proyectoId);
			exit();
        }
	
	public function actualizar(){
		try{
                    $id=$this->getParam('id');
                    $do_submit = $this->getParam('do_submit');
                    //$Nota = Factory::create(FactoryModel::getInstance(), 'Nota');
                    //$this->View->assign('notas', $this->model2List($Nota->fetch(),'id','nombre','texto','estado','notaId','usuario'));
                    $this->Model->id = $id;
                    $this->View->assign('js','edit');
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
                        $validator=new Validator();
                        $validator->validoModel($this->Model);
                        $this->Model->update();
                        $this->View->assign('msg', array('success', 'El registro ha sido actualizado correctamente'));
                    }
		}
		catch (\Exception $e){
			$this->View->assign('msg', array('error',$e->getMessage()));
		}
               
		$this->View->assign('model', $this->Model->toArray());
                //$this->View->assign('id', $this->Model->id);
                
                $this->View->display();	
	}
}