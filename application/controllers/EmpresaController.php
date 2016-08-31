<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryMatchAgainst;
use lib\dao\query\QueryIn;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryOrder;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;
use lib\comunication\Comunication;


class EmpresaController extends Controller{
	
	public function index(){
            try{
                $this->View->layout = 'backend';
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
                        'rubroId'=>$this->getParam('search')),'',false));
                }
                if(!$estado){
                    $estado='Vigente';
                }
                
                $Q->add(new QueryAnd('estado',$estado));
                $this->View->assign('estado', $estado);
               
                //
                
                
                //Paginación.
                $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
                $Q->add($P);
                $Q->prepare($this->Model);
                   
                //Asigno resultado a la vista
                $this->View->assign('rows', $this->Model->fetch($Q));
                $this->View->assign('P', $P);
                $this->View->assign('search', $search);
                $this->View->assign('page', $this->getPage());
                $this->View->assign('estados', array(
                                                        Pendiente   => 'Pendiente',
                                                        Vigente     => 'Vigente',
                                                        Suspendido  => 'Suspendida'
                                                    ));
                
                
                //Muestro template
                $this->View->assign('titulo', "Listado de ");
                $this->View->assign('subtitulo', "Empresas");
                $this->View->display();
            }
            catch (\Exception $e){
                    die($e->getMessage());
            }	
	}
	public function crear(){
            try{
                $do_submit = $this->getParam('do_submit');
                $this->View->assign('css', 'formclass'); 
                
                if($do_submit){
                    $this->params2Model($this->Model);
                    //campos obligatorios
                    $this->required($this->Model, array('nombre','telefono','celular'));
                    //valido los campos del model.
                    $this->Model->estado='Vigente';
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    $Auth = \Zend_Auth::getInstance();
                    $this->Model->usuario=$Auth->getIdentity()->usr;
                    $this->Model->create();
                    $Empresarubro= Factory::create(FactoryModel::getInstance(), 'Empresarubro');
                    $Empresarubro->addEmpresarubro($this->getParam('allrubro'),$this->Model);
                    $Enlace= Factory::create(FactoryModel::getInstance(), 'Enlace');
                    $Enlace->addEnlace($this->getParam('allenlace'),$this->Model);
                    $this->Model->notify(__METHOD__);
                    $this->View->assign('msg', array('success', 'El registro se ha guardado correctamente'));
                    header("location:/empresa/listar/?search=".$this->Model->descripcion);
                    $this->clean($this->Model);
                    
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }
             $this->View->assign('estados', array(
                                                        Pendiente   => 'Pendiente',
                                                        Vigente     => 'Vigente',
                                                        Suspendida  => 'Suspendida'
                                                    ));
            $this->View->assign('model', $this->Model->toArray());
            $this->View->assign('titulo', "Nueva ");
            $this->View->assign('subtitulo', "Empresa");
            $this->View->assign('controller', 'empresa');
            
            $this->View->display();
            $fichero_salida="out.html";
            $tabla=$this->View->fetch();
            $fp=fopen($fichero_salida,w);
            fwrite($fp,$tabla);
            fclose($fp);

            if(!file_exists($fichero_salida)) die("Error en la Generacion del Archivo");
            else echo "Archivo " . $fichero_salida . "Generado. <a href=" . $fichero_salida . ">Bajar Click Derecho y Guardar Destino Como...</a>";

            	
	}
	public function eliminar(){
            $id = $this->getParam('id');				
            if(empty($id)){
                header("location:/empresa/index/");
                exit();
            }
            $this->Model->id = $id;
            $Q=new Query($this->Model);
            $Q->add(new QueryAnd('id',$id));
            $Auth = \Zend_Auth::getInstance();
            if(!$this->Model->load($Q)){
                header("location:/empresa/index");
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
            header("location:/empresa/index/?estado=Pendiente");
            exit();
        }
        public function actualizar(){
            try{
                $id=$this->getParam('id');
                $this->View->assign('css', 'formclass'); 
                $do_submit  = $this->getParam('do_submit');
                $Empresa   = Factory::create(FactoryModel::getInstance(), 'Empresa');
                //$this->View->assign('empresas', $this->model2List($Empresa->fetch(),'id','nombre','estado','usuario'));
                $this->Model->id = $id;
                $Q = new Query($this->Model);
                if($id){
                        $Q->add(new QueryAnd('id',$id));				
                }
                if(!$this->Model->load($Q)){
                    throw new \Exception('Identificador no valido');
                }
                $Auth = \Zend_Auth::getInstance();
                    
                if($Auth->getIdentity()->id!=$this->Model->contactoId && $Auth->getIdentity()->role!='ADM'){
                   $this->clean($this->Model);
                    throw new \Exception($Auth->getIdentity()->nombre.', no tienes permiso para modificar estos registros.');
                    header("location:/empresa/listar/");
                    exit();
                }
                if($do_submit){
                    $this->params2Model($this->Model);
                    //$this->required($this->Model, array('nombre','usuario'));
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    
                    if( $Auth->getIdentity()->id==$this->Model->contactoId || $Auth->getIdentity()->role=='ADM'){
                        $this->Model->update();
                        
                        
                        $Empresarubro= Factory::create(FactoryModel::getInstance(), 'Empresarubro');
                        
                        $Empresarubro->modifyEmpresarubro($this->getParam('allrubro'),$this->Model);
                        $Enlace= Factory::create(FactoryModel::getInstance(), 'Enlace');
                        $Enlace->modifyEnlace($this->getParam('allenlace'),$this->Model);
                    
                        //$this->View->assign('model', $this->Model->toArray());
                        $this->View->assign('msg', array('success', 'El registro se ha actualizado correctamente'));
                    }else{
                        $this->_helper->flashMessenger->addMessage('error');
                        $this->_helper->flashMessenger->addMessage($Auth->getIdentity()->nombre.': Ocurrio un error, no tienes permiso para modificar informaci&oacute;n de la empresa  '.$this->Model->nombre);
                    }
                }
                $result=$this->Model->fetch($Q);
                $rubros=$this->Model->obtenerRubros($result);
                $this->View->assign('rubros', $rubros);
                $enlaces=$this->Model->obtenerEnlaces($result);
                $this->View->assign('enlaces', $enlaces);
                
                
            }
            catch (\Exception $e){
                $this->View->assign('msg', array('error',$e->getMessage()));
            }
            $this->View->assign('model',$this->Model->toArray());
            $this->View->assign('id',   $this->Model->id);
            $this->View->assign('estados', array(
                                                        Pendiente   => 'Pendiente',
                                                        Vigente     => 'Vigente',
                                                        Suspendida  => 'Suspendida'
                                                    ));
            $this->View->assign('controller', 'empresa');
            
            $this->View->display();	
	}
        public function listar(){
            try{
                $this->getMessages();
                //Defino la vista en frontend
                $this->View->layout = 'frontend'; 
                $search     = $this->getParam('search');
                $advanced   = $this->getParam('advanced');
                $tipo       = $this->getParam('tipo');
                $estado     = $this->getParam('estado');
                //controlo si la llamada es de jquery;
                if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                     $this->View->assign('jquery', TRUE); 
                }
                
                $Rubro          =   Factory::create(FactoryModel::getInstance(), 'Rubro');
                $existsRub      =   $Rubro->existsRubro($search);
                $Empresarubro   =   Factory::create(FactoryModel::getInstance(), 'Empresarubro');
                //Instancio la Query del modelo
                $Q      = new Query($this->Model,$Empresarubro,$Rubro);
                

//Controlo que el tamaño del parametro a buscar sea mayor que dos caracteres.
                if(strlen ($search)<3){
                    
                    $this->_helper->flashMessenger->addMessage('warning');
                    $this->_helper->flashMessenger->addMessage('Ingresa un m&iacute;nimo de 3 caracteres');
                    $this->_redirect('index', array('exit'=>false));
                    return;
                }
                if(!$estado){
                    $estado='Vigente';
                }
                //Limito la busqueda a empresas vigentes.
                $Q->add(new QueryAnd('estado',$estado));
                
//Verifico si la busqueda contiene el nombre de un rubro. 
                
                
//Si $advance es true o existe un rubro en el parametro de busqueda, se realiza busqueda en las tablas de rubro y empresarubro
                
                if($advanced || $existsRub!=null){
                    $Q2     = new Query($Rubro,$Empresarubro);
                    $valor="'".$existsRub."'";
                    $Q2->add(new QueryIn('subrubro',$valor,'empresaId','AND'));
                    $fulltext="rubro,subrubro";
                    $Q2->add(new QueryMatchAgainst($fulltext,$existsRub));
                    $Q2->prepare();
                }
                $existsLoc=$this->Model->existsLoc($search);
                $Q->add(new QueryAnd('localidad',$existsLoc));
                $fulltext2="nombre,descripcion,direccion,localidad,departamento";
                $Q->add(new QueryMatchAgainst($fulltext2,$search));
                $Q->add(new QueryIn('id',$Q2->query,'','OR'));
                $order=array('subrubro','localidad');
                
                $Q->add(new QueryOrder('','',$order));
                
                $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
                $Q->add($P);
                //$Q->prepare($this->Model);
                
                $result=$this->Model->fetch($Q);
                
                //asigno resultados al modelo
                $this->View->assign('estado', $estado);
                $this->View->assign('rows',$result);
                $this->View->assign('P', $P);
                $this->View->assign('search', $search);
                $this->View->assign('page', $this->getPage());
                $this->View->assign('estados', array(
                                                        Pendiente   => 'Pendiente',
                                                        Vigente     => 'Vigente',
                                                        Suspendido  => 'Suspendida'
                                                    ));
                $this->View->assign('titulo', "Listado de ");
                $this->View->assign('subtitulo', "Empresas");
                $rubros=$this->Model->obtenerRubros($result);
                $this->View->assign('rubros', $rubros);
                $enlaces=$this->Model->obtenerEnlaces($result);
                $this->View->assign('enlaces', $enlaces);
                $this->View->display();
            }
            catch (\Exception $e){
                    die($e->getMessage());
            }	
	}
        
        public function autocomplete(){
           
            
            if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                             $this->View->assign('jquery', TRUE); 
                        }
            //Para uso por ajax
            $param=$this->getParam('param');
            $Rubro   = Factory::create(FactoryModel::getInstance(), 'Rubro');
            $Q      = new Query($Rubro);
            
            if($param){
                $Q->add(new QueryLike(array(
                                            'rubro'       =>$param,
                                            'subrubro'    =>$param
                                            ),'',false));
            }
            $Q->add(new QueryLimit((int)-1,(int)$this->Config->pagination->rows));
            $rows=$Rubro->fetch($Q);
            $retorno=array();
            if(is_array($rows)&& !empty($rows)){
                foreach($rows as $row) {
                    $rubro[id]=$row[id];
                    $rubro[rubro]=utf8_encode($row[rubro]);
                    $rubro[subrubro]=utf8_encode($row[subrubro]);
                    
                    $retorno[]=$rubro; 
                }
            }
            $this->View->assign('subrubro',$param);
            $this->View->assign('rows',$retorno);
            $this->View->display();
            
        }
    }
    