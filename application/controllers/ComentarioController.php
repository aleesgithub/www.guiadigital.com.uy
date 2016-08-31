<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;

class ComentarioController extends Controller{
	
    public function index(){
       exit();
    }

    public function crear(){
        try{
                //hidden o tomar valor del boton submit para saber si
                //postearon formulario.

                $do_submit = $this->getParam('do_submit');
                $notaId=$this->getParam('notaId');
                
                if($notaId){

                            $Nota = Factory::create(FactoryModel::getInstance(), 'Nota');
                            $Q2 = new Query($Nota);
                            $Q2->add(new QueryAnd('id',$notaId));
                            $Nota->load($Q2);
                            $this->View->assign('nota', $Nota->toArray());
                }
                if($Nota->proyectoId){
				
				$Proyecto = Factory::create(FactoryModel::getInstance(), 'Proyecto');
				$Q2 = new Query($Proyecto);
				$Q2->add(new QueryAnd('id',$Nota->proyectoId));
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
                $validator=new Validator();
                $validator->validoModel($this->Model);
                $this->Model->create();
                $this->Model->notify(__METHOD__,$Proyecto->nombre,$Proyecto->usuario);
                $this->View->assign('msg', array('success', 'El comentario se ha guardado correctamente'));
                header("location:/nota/?proyectoId=".$Nota->proyectoId);
            }
        }
        catch (\Exception $e){
                $this->View->assign('msg', array('error',$e->getMessage()));
        }
        
        //$this->Model->notaId=$notaId;
        $this->View->assign('model', $this->Model->toArray());
        //Muestro titúlo el template
        $titulo=  utf8_decode("Comentario de la Nota:");
        $this->View->assign('titulo', $titulo);

        $this->View->assign('subtitulo', $Nota->nombre);
        $this->View->display();	
    }

    public function eliminar(){		
        /*$id = $this->getParam('id');				
        if(empty($id)){
         header("location:/evaluacion/index/1");
                exit();
        }

        $this->Model->id = $id;
        $Q=new Query($this->Model);
        $Q->add(new QueryAnd('id',$id));
        if(!$this->Model->load($Q)){
            header("location:/evaluacion/index");
            exit();
        }else{
            $this->Model->delete();
        }

        $this->_helper->flashMessenger->addMessage('success');
        $this->_helper->flashMessenger->addMessage('El registro fue eliminado correctamente');

        header("location:/evaluacion/index/");
        exit();*/
    }

    public function actualizar(){
            try{
                //hidden o tomar valor del boton submit para saber si
                //postearon formulario.
                $id=$this->getParam('id');

                $do_submit = $this->getParam('do_submit');
                $Evaluacion = Factory::create(FactoryModel::getInstance(), 'Nota');
                $this->View->assign('evaluaciones', $this->model2List($Evaluacion->fetch(),'id','texto','estado','usuario'));
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
            //Muestro y titúlo el template
            $titulo=  utf8_decode("Actualizar evaluación del Proyecto:");
            $this->View->assign('titulo', $titulo);
            $this->View->assign('subtitulo', $Proyecto->nombre);
            $this->View->display();	
    }
}