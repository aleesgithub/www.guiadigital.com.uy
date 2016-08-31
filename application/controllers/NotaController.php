<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;
use lib\dao\query\QueryOrder;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;
use lib\comunication\Comunication;
//require_once 'PrddController.php';

class NotaController extends Controller{
	
	public function index(){
            
            try{
		$proyectoId=$this->getParam('proyectoId');
                $nombre=$this->getParam('nombre');
                $Q = new Query($this->Model);	
                if($nombre){
                    $Q->add(new QueryAnd('nombre', $nombre));
                }
                if($proyectoId){
                        $Auth = \Zend_Auth::getInstance();
                        $Q->add(new QueryAnd('proyectoId',$proyectoId));
                        if(!($Auth->getIdentity()->role=='ADM'||$Auth->getIdentity()->role=='CCL')){
                            $Q->add(new QueryAnd('acceso','Publico'));
                        }
                        $Q->add(new QueryAnd('estado','Activo'));
                        
                        
                        $Q->add(new QueryOrder('','','nombre'));
                        $Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
                        $Q2 = new Query($Proyecto);
                        $Q2->add(new QueryAnd('id',$proyectoId));
                        $Proyecto->load($Q2);
                        $this->View->assign('proyecto', $Proyecto->toArray());
                        
                        $Q3= new Query($this->Model);
                        $Q3->add(new QueryAnd('proyectoId',$proyectoId));
                        $Q3->add(new QueryAnd('estado','Inactivo'));
                        $Q3->add(new QueryOrder('','','id'));
                        $Q3->prepare($this->Model);
//Asigno resultado a la vista
                        
                        
                        
                        $Comentario = Factory::create(FactoryModel::getInstance(), 'Comentario');
                        $Q4 = new Query($Comentario);
                        $Q4->add(new QueryAnd('notaId',$this->Model->id));
                        $Q4->prepare($Comentario);
                        //Asigno resultado a la vista
                       
                        if($Auth->getIdentity()->role=='ADM'||$Auth->getIdentity()->role=='CCL'){
                            $this->View->assign('antecedentes', $this->Model->fetch($Q3));
                            $this->View->assign('comentarios', $Comentario->fetch($Q4));
                        }
			
                }

                $this->View->assign('excepciones',array(
                                                        'Revisión',
                                                        'Validación',
                                                        'Verificación'
                                                    ) );

                //Muestro titúlo el template
                $this->View->assign('titulo', "Notas del Proyecto:");
                $this->View->assign('subtitulo', $Proyecto->nombre);

                parent::index($Q);
			
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
                    $this->View->assign('js','edit');
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
                    $this->Model->notaId=$this->Model->id;
                    $this->Model->update();
                   
                    //Notifico la acción a los colaboradores del proyecto.
                   
                    $this->Model->notify(__METHOD__,$Proyecto->nombre);
                   
                    $this->clean($this->Model);
                    $this->View->assign('msg', array('success', 'El registro se ha guardado correctamente'));
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }
            $this->Model->proyectoId=$proyectoId;
            $this->View->assign('titulo', "Agregar nota al proyecto:");
            $this->View->assign('subtitulo', $Proyecto->nombre); 
            $this->View->assign('model', $this->Model->toArray());
            
            //Roels para seleccionar.
            $this->View->assign('table_options', array(
                                                        Privado => 'Privado',
                                                        Protegido => 'Protegido',
                                                        Publico =>'Publico'
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
                       
			 header("location:/nota/?proyectoId=".$this->Model->proyectoId);
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
                    $this->View->assign('js','edit');
                    if($do_submit){
                        $texto=$this->Model->texto;
                        $notaId=$this->Model->notaId;
                            
//cargo modelo con parametros del form
                        $this->params2Model($this->Model);
                        //campos obligatorios
                        //$this->required($this->Model, array('usr','pwd','role','nombre','apellido','email','language'));
                        $validator=new Validator();
                        $validator->validoModel($this->Model);
                        //echo $this->Model->texto;  echo "<br>"; echo $this->Model->nombre;die;
                        //$this->Model->notaId=$notaId;
                        $this->Model->updated=date("Y-m-d H:i:s");
                        $this->Model->create();
                        
                        if($notaId==1){
                            $this->Model->notaId=$this->Model->id;
                            $this->Model->update();
                            $this->Model->id=$id;
                            $this->Model->delete();
                        }else{
                            $this->Model->id=$id;
                            $this->Model->estado='Inactivo';
                            $this->Model->notaId=$notaId;
                            $this->Model->texto=$texto;
                            $this->Model->update();
                        }
                        header("location:/nota/?proyectoId=".$this->Model->proyectoId);
                        $this->View->assign('msg', array('success', 'El registro ha sido actualizado correctamente'));

                    }
		}
		catch (\Exception $e){
			$this->View->assign('msg', array('error',$e->getMessage()));
		}
                $this->View->assign('titulo', "Actualizar nota del proyecto:");
                $this->View->assign('subtitulo', $Proyecto->nombre); 
                $this->View->assign('table_options', array(
                                                        Privado => 'Privado',
                                                        Protegido => 'Protegido',
                                                        Publico =>'Publico'
                                                    ));
		$this->View->assign('model', $this->Model->toArray());
                $this->View->assign('id', $this->Model->id);
                
                $this->View->display();	
	}

        public function listar(){
            
            try{
		$proyectoId=$this->getParam('proyectoId');
                $nombre=$this->getParam('nombre');
                $Q = new Query($this->Model);	
                if($nombre){
                    $Q->add(new QueryAnd('nombre', $nombre));
                }
                if($proyectoId){
                        $Auth = \Zend_Auth::getInstance();
                        $Q->add(new QueryAnd('proyectoId',$proyectoId));
                        $Q->add(new QueryAnd('acceso','Publico'));
                        $Q->add(new QueryAnd('estado','Activo'));
                        $Q->add(new QueryOrder('','','nombre'));
                        $Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
                        $Q2 = new Query($Proyecto);
                        $Q2->add(new QueryAnd('id',$proyectoId));
                        $Proyecto->load($Q2);
                        $this->View->assign('proyecto', $Proyecto->toArray());
                        }
                $this->View->assign('titulo', "Notas del Proyecto:");
                $this->View->assign('subtitulo', $Proyecto->nombre);

                parent::index($Q);
			
		}
		catch (\Exception $e){
			die($e->getMessage());
		}
            	
	}
}