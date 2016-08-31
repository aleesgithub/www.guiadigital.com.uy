<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryIn;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;
use lib\comunication\Comunication;


class ProyectoController extends Controller{
	
	public function index(){
            try{
                $Auth = \Zend_Auth::getInstance();
                $a=$Auth->getIdentity();
               
                $this->getMessages();
                
                
                $search = $this->getParam('search');
                $tipo   = $this->getParam('tipo');
                $estado = $this->getParam('estado');
                $Q      = new Query($this->Model);
                if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                     $this->View->assign('jquery', TRUE); 
                }
                if($search){
                    $Q->add(new QueryLike(array(
                        'nombre'=>$this->getParam('search'),
                        'codref'=>$this->getParam('search')),'',false));
                }
                if(!$estado){
                    $estado='Vigente';
                }elseif ($estado=="Desarrollo") {
                    //Filtro los proyectos donde el usuario tenga participación.
                    $Colaborador=Factory::create(FactoryModel::getInstance(), 'Colaborador');
                    $Q3 = new Query($Colaborador);
                    $valor="'".$Auth->getIdentity()->usr."'";
                    //QueryIn(campo,valorCampo,campoRetorno)
                    $Q3->add(new QueryIn('usuario',$valor,'proyectoId'));
                    $Q3->prepare();
                    $this->View->assign('colaboradores', $Colaborador->fetch());        
                }
                $Q->add(new QueryIn('id',$Q3->query));
                $Q->add(new QueryAnd('estado',$estado));
                $this->View->assign('estado', $estado);
                if($tipo){
                    $Q->add(new QueryAnd('tipo',$tipo));
                }
                
                
                //Paginación.
                $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
                $Q->add($P);
                $Q->prepare($this->Model);
                
                $User = Factory::create(FactoryModel::getInstance(), 'User');
                $Q2 = new Query($User);
                $User->load($Q2);
                $this->View->assign('users', $User->fetch());        
                //Asigno resultado a la vista
                $this->View->assign('rows', $this->Model->fetch($Q));
                $this->View->assign('P', $P);
                $this->View->assign('search', $search);
                $this->View->assign('page', $this->getPage());
                $this->View->assign('estados', array(
                                                        Desarrollo  => 'Desarrollo',
                                                        Vigente     => 'Vigente',
                                                        Anulado     => 'Anulado',
                                                        Suspendido  => 'Suspendido'
                                                    ));
                
                
                //Muestro template
                $this->View->assign('titulo', "Listado de ");
                $this->View->assign('subtitulo', "Proyectos");
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
                    //campos constantes.
                    $this->Model->codRef = 999;
                    //$this->Model->estado = 'Desarrollo';
                    //cargo modelo con parametros del form
                    $this->params2Model($this->Model);
                    //campos obligatorios
                    $this->required($this->Model, array('nombre','tipo'));
                    //valido los campos del model.
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    $Auth = \Zend_Auth::getInstance();
                    $this->Model->usuario=$Auth->getIdentity()->usr;
                    $this->Model->create();
                   
                    switch ($this->Model->tipo) {
                        
                        case "Procedimiento":
                            $ctrl="Capitulo";
                            $Capitulo=Factory::create(FactoryModel::getInstance(), $ctrl);
                            $Capitulo->defaultCapitulo($this->Model->id, $this->Model->usuario);
                            
                            break;
                        default:
                            $ctrl="Nota";
                            $Nota=Factory::create(FactoryModel::getInstance(), $ctrl);
                            $Nota->defaultNota($this->Model->id, $this->Model->usuario);
                            
                    }
                    
                    $this->Model->notify(__METHOD__);
                    $this->addcolO($Auth->getIdentity()->usr,$this->Model->id);
                    header("location:/".$ctrl."/?proyectoId=".$this->Model->id);
                    $this->View->assign('msg', array('success', 'El registro se ha guardado correctamente'));
                   
                    $this->clean($this->Model);
                    exit();
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }
             $this->View->assign('estados', array(
                                                        Vigente     =>'Vigente',
                                                        Desarrollo  =>'Desarrollo',
                                                        Anulado     =>'Anulado',
                                                        Suspendido  =>'Suspendido'
                                                    )); 
            $this->View->assign('model', $this->Model->toArray());

            //Roels para seleccionar.
            $this->View->assign('table_options', array(
                                                        
                                                        Convenio => 'Convenio',
                                                        Procedimiento => 'Procedimiento',
                                                        Producto => 'Producto',
                                                        Promocion =>'Promocion'
                                                    ));

            
            $this->View->assign('titulo', "Nuevo ");
            $this->View->assign('subtitulo', "Proyecto");
            $this->View->display();	
	}
	
	public function eliminar(){
             
			$id = $this->getParam('id');				
			if(empty($id)){
				header("location:/proyecto/index/1");
				exit();
			}
				
			$this->Model->id = $id;
                        $Q=new Query($this->Model);
                        $Q->add(new QueryAnd('id',$id));
                        $Auth = \Zend_Auth::getInstance();
			if(!$this->Model->load($Q)){
                            header("location:/proyecto/index");
                            exit();
                        }else{
                            if($Auth->getIdentity()->usr==$this->Model->usuario){
                                $this->Model->delete();
                                $this->_helper->flashMessenger->addMessage('success');
                                $this->_helper->flashMessenger->addMessage($Auth->getIdentity()->nombre.', el registro fue eliminado correctamente ');
                            }else{
                                $this->_helper->flashMessenger->addMessage('error');
                                $this->_helper->flashMessenger->addMessage($Auth->getIdentity()->nombre.': Ocurrio un error, no tienes permiso para eliminar el proyecto del usuario  '.$this->Model->usuario);
                            }
                        }
			
			
                       
			header("location:/proyecto/index/?estado=Desarrollo");
			exit();
        }
	
	public function actualizar(){
            try{
                $id=$this->getParam('id');
                $do_submit  = $this->getParam('do_submit');
                $Proyecto   = Factory::create(FactoryModel::getInstance(), 'Proyecto');
                $this->View->assign('proyectos', $this->model2List($Proyecto->fetch(),'id','nombre','codRef','estado','tipo','usuario'));
                $this->Model->id = $id;
                
                
                $Q = new Query($this->Model);
                if($id){
                        $Q->add(new QueryAnd('id',$id));				
                }
                if(!$this->Model->load($Q)){
                    throw new \Exception('Identificador no valido');
                }
                $User = Factory::create(FactoryModel::getInstance(), 'User');
                $Q2 = new Query($User); 
                $Q2->add(new QueryAnd('estado','Vigente'));
                $Q2->prepare($User);
                $this->View->assign('users', $User->fetch($Q2));    
                $Colaborador = Factory::create(FactoryModel::getInstance(), 'Colaborador');
                $Q3 = new Query($Colaborador); 
                $Q3->add(new QueryAnd('proyectoId',$id));
                $Q3->prepare($Colaborador);
                $this->View->assign('colaboradores', $Colaborador->fetch($Q3)); 
                if($do_submit){
                    $this->params2Model($this->Model);
                    $this->required($this->Model, array('nombre','usuario'));
                    //controlar que el usuario creador sea el único que puede modificar el proyecto
                    //valido los campos del model.
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    $Auth = \Zend_Auth::getInstance();
                    
                    if($Auth->getIdentity()->usr==$this->Model->usuario){
                                $this->Model->update();
                                $this->View->assign('model', $this->Model->toArray());
                                $this->_helper->flashMessenger->addMessage('success');
                                $this->_helper->flashMessenger->addMessage($Auth->getIdentity()->nombre.', el registro fue modificado correctamente ');
                            }else{
                                $this->_helper->flashMessenger->addMessage('error');
                                $this->_helper->flashMessenger->addMessage($Auth->getIdentity()->nombre.': Ocurrio un error, no tienes permiso para modificar el proyecto del usuario  '.$this->Model->usuario);
                            }
                    
                    
                    
                    
                   
                }
            }
            catch (\Exception $e){
                $this->View->assign('msg', array('error',$e->getMessage()));
            }
            $this->View->assign('model',$this->Model->toArray());
            $this->View->assign('id',   $this->Model->id);
            $this->View->assign('estados', array(
                                                    Vigente     => 'Vigente',
                                                    Desarrollo  => 'Desarrollo',
                                                    Anulado     => 'Anulado',
                                                    Suspendido   => 'Suspendido'
                                                ));
            //Opciones de tipos de proyectos.
             $this->View->assign('table_options', array(
                                                    Procedimiento   => 'Procedimiento',
                                                    Convenio        => 'Convenio',
                                                    Producto        => 'Producto',
                                                    Promocion       => 'Promocion'
                                                ));
            $this->View->display();	
	}
        public function addcol(){		
            
            $usr        = $this->getParam('usr');
            $email      = $this->getParam('email');
            $nombre     = $this->getParam('nombre');
            $proyectoId = $this->getParam('id');
            
            $Colaborador=Factory::create(FactoryModel::getInstance(), 'Colaborador');
            $Colaborador->usuario   =$usr;
            $Colaborador->proyectoId=$proyectoId;
            $Colaborador->estado    ="Vigente";
            
            $Colaborador->create();
            $Colaborador->notify(__METHOD__,$nombre,$email);
            
            header("location:/proyecto/actualizar/id/".$proyectoId);
            
        }
        public function addcolO($usr,$id){		
            
            
            $Colaborador=Factory::create(FactoryModel::getInstance(), 'Colaborador');
            $Colaborador->usuario=$usr;
            $Colaborador->proyectoId=$id;
            $Colaborador->estado="Vigente";
            
            if($Colaborador->create()){
                $Colaborador->notify(__METHOD__,$nombre);
            }
           
            
        }
}