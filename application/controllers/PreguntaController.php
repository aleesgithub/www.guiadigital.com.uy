<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;

class PreguntaController extends Controller{
	
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
                                $Respuesta = Factory::create(FactoryModel::getInstance(), 'Respuesta');
                                $Q3 = new Query($Respuesta);
                                $Q3->add(new QueryAnd('proyectoId',$proyectoId));
                                $Q3->prepare($Respuesta);
                                $this->View->assign('respuestas',$Respuesta->fetch($Q3));
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
			//Muestro titúlo el template
                        $this->View->assign('titulo', "Preguntas y Respuestas del Proyecto:");
                        $this->View->assign('subtitulo', $Proyecto->nombre);
                        $this->View->assign('controlador', "Pregunta");
                        
			$this->View->display();
		}
		catch (\Exception $e){
			die($e->getMessage());
		}
//            try{
//                $this->getMessages();
//                $search = $this->getParam('search');
//                $proyectoId=$this->getParam('proyectoId');
//                $Q = new Query($this->Model);
//                if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
//                     $this->View->assign('jquery', TRUE); 
//                }
//                if($search){
//                        $Q->add(new QueryLike(array(
//                        'texto' =>$this->getParam('search'),
//                        'estado'=>$this->getParam('search')),'',false));
//                }
//                if($proyectoId){
//                    $Q->add(new QueryAnd('proyectoId',$proyectoId));
//                    $Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
//                    $Q2 = new Query($Proyecto);
//                    $Q2->add(new QueryAnd('id',$proyectoId));
//                    $Proyecto->load($Q2);
//                   // print_r($Proyecto->toArray());
//                    $this->View->assign('proyecto', $Proyecto->toArray());
//                    $Respuesta = Factory::create(FactoryModel::getInstance(), 'Respuesta');
//                    $Q3 = new Query($Respuesta);
//                    $Q3->add(new QueryAnd('proyectoId',$proyectoId));
//                    $Q3->prepare($Respuesta);
//                    $this->View->assign('respuestas',$Respuesta->fetch($Q3));
//                }
//
//                //Paginación.
//                $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
//                $Q->add($P);
//                $Q->prepare($this->Model);
//                //Asigno resultado a la vista
//                $this->View->assign('rows', $this->Model->fetch($Q));
//                $this->View->assign('P', $P);
//                $this->View->assign('search', $search);
//                $this->View->assign('page', $this->getPage());
//                //Muestro template
//                //Muestro titúlo el template
//                $this->View->assign('titulo', "Preguntas y Respuestas del Proyecto:");
//                $this->View->assign('subtitulo', $Proyecto->nombre);
//                $this->View->assign('controller', "Pregunta");
//                $this->View->display();
//            }
//            catch (\Exception $e){
//                    die($e->getMessage());
//            }	
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
                $User = Factory::create(FactoryModel::getInstance(), 'User');
                $this->View->assign('usuarios', $this->model2List($User->fetch(),'usr','usr'));
                if($do_submit){
                    //cargo modelo con parametros del form
                    $this->params2Model($this->Model);
                    //campos obligatorios
                    //$this->required($this->Model, array('nombre','texto'));
                    //$this->Model->codRef = 999;
                    $this->Model->estado = 'Activo';
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    $this->Model->create();
                    $Respuesta=Factory::create(FactoryModel::getInstance(), 'Respuesta');
                    $Respuesta->usuario=$this->getParam('asignada');
                    $Respuesta->preguntaId=$this->Model->id;
                    $Respuesta->proyectoId=$this->Model->proyectoId;
                    
                    $Respuesta->create();
                    $this->Model->notify(__METHOD__,$Proyecto->nombre);
                    
                    $Respuesta->notify(__METHOD__,$Proyecto->nombre,  $this->Model->texto);
                    
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
				header("location:/pregunta/index/1");
				exit();
			}
				
			$this->Model->id = $id;
                        $Q=new Query($this->Model);
                        $Q->add(new QueryAnd('id',$id));
			if(!$this->Model->load($Q)){
                            header("location:/pregunta/index");
                            exit();
                        }else{
                            $this->Model->delete();
                        }
			
			$this->_helper->flashMessenger->addMessage('success');
			$this->_helper->flashMessenger->addMessage('El registro fue eliminado correctamente');
                       
			header("location:/pregunta/index/");
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

	public function responder(){
            try{
                $do_submit =    $this->getParam('do_submit');
                $preguntaId=    $this->getParam('preguntaId');
                $proyectoId=    $this->getParam('proyectoId');
                
                if($preguntaId){
                            $Pregunta = Factory::create(FactoryModel::getInstance(), 'Pregunta');
                            $Q2 = new Query($Pregunta);
                            $Q2->add(new QueryAnd('id',$preguntaId));
                            $Pregunta->load($Q2);
                            $this->View->assign('pregunta', $Pregunta->toArray());
                            $Respuesta=Factory::create(FactoryModel::getInstance(), 'Respuesta');
                            $Q3 = new Query($Respuesta);
                            $Q3->add(new QueryAnd('preguntaId',$preguntaId));
                            $Respuesta->load($Q3);
                            $this->View->assign('respuesta', $Respuesta->toArray());
                } 
                if($proyectoId){
                            $Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
                            $Q2 = new Query($Proyecto);
                            $Q2->add(new QueryAnd('id',$proyectoId));
                            $Proyecto->load($Q2);
                            $this->View->assign('proyecto', $Proyecto->toArray());
                }
                
                if($do_submit){
                    //cargo modelo de respuesta con parametros del form
                    $Respuesta=Factory::create(FactoryModel::getInstance(), 'Respuesta');
                    $this->params2Model($Respuesta);
                    
                    //campos obligatorios
                    $this->required($Respuesta, array('texto'));
                    $Respuesta->estado = 'Activo';
                    $validator=new Validator();
                    $validator->validoModel($Respuesta);
                    $Respuesta->notify(__METHOD__,$Proyecto->nombre,$Respuesta->texto);
                    
                    $Respuesta->update();
                    
                    
                    
                    $this->clean($Respuesta);
                    $this->View->assign('msg', array('success', 'Respuesta ingresada correctamente'));
                    header("location:/pregunta/?proyectoId=".$proyectoId);
                                        
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }
            $this->View->display();	
	}
	
        
                }