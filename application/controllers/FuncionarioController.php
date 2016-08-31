<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\image\SimpleImage;
use lib\helpers\Validator;

class FuncionarioController extends Controller{
	
	public function index(){
		try{
			$this->getMessages();
                        $search = $this->getParam('search');
                        $Q= new Query($this->Model);
                        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                            $this->View->assign('jquery', TRUE); 
                        }
                        
                        if($search){
                            $Q->add(new QueryLike(array(
                                'codigo'=>$this->getParam('search'),
                                'cargo'=>$this->getParam('search'),
                                'nombre'=>$this->getParam('search'),
                                'apellido'=>$this->getParam('search')),'',false));
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
			//Muestro template
                        $this->View->assign('titulo', "Lisatdo de ");
                        $this->View->assign('subtitulo', ucfirst($this->getName())."s");
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

                if($do_submit){
                    //cargo modelo con parametros del form
                    $this->params2Model($this->Model);
                    //campos obligatorios
                    $this->required($this->Model, array('codigo','cargo','estado','nombre','apellido','email','ingreso'));
                    $this->Model->imagen = 'nofoto.png';
                    $this->Model->estado='Vigente';
                    $this->Model->egreso='2020-04-12';
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    
                    /*
                     * $this->View->assign('user_estado', array(
                                                        Vigente => 'Vigente',
                                                        Suspendido => 'Suspendido',
                                                        Anulado => 'Anulado'
                                                    ));
                    */
                    $this->Model->create();
                    //Para el control de la imagen y la persistencia en la base de datos.
                    if($_FILES['imagen']['error'] == UPLOAD_ERR_OK){
                        $tmp_name = $_FILES["imagen"]["tmp_name"];
                        $name = $_FILES["imagen"]["name"];
                        $extension = substr($name, strripos($name, '.'));
                        $pre=  $this->getName();
                        $name = $pre.'_'.$this->Model->id.$extension;
                        move_uploaded_file($tmp_name, $this->Config->image->uploads->path.$name);
                        $this->Model->imagen = $name;
                        $image = new SimpleImage($this->Config->image->uploads->path.$name);
                        $image->square($this->Config->image->square);
                        $image->save($this->Config->image->uploads->mini.$name);
                        
                    }
                    //invoco create heredado de Model
                    
                    $this->Model->update();
                    $this->clean($this->Model);
                    $this->View->assign('msg', array('success', 'El registro se ha guardado correctamente'));
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }

            $this->View->assign('model', $this->Model->toArray());

            //Estados para seleccionar desde la base.
            /*
              $Rol=Factory::create(FactoryModel::getInstance(), 'Rol');
              $Q3 = new Query($Rol);
              $this->View->assign('roles', $this->model2List($Rol->fetch(),'rol','leyenda'));        
            */
            //$this->View->assign('proyectos', $this->model2List($Proyecto->fetch(),'id','nombre','codRef','estado','tipo','usuario'));
            $this->View->assign('estados', array(
                                                        Vigente => 'Vigente',
                                                        Suspendido => 'Suspendido',
                                                        Baja => 'Baja',
                                                        
                                                    ));
            $this->View->assign('cargos', array(
                                                        Promotor => 'Promotor',
                                                        Telemarketers => 'Telemarketers',
                                                        Supervisor => 'Supervisor',
                                                        
                                                    ));
           
            $this->View->display();	
	}
	
	public function eliminar(){		
			$id = $this->getParam('id');				
			if(empty($id)){
				header("location:/funcionario/index/1");
				exit();
			}
				
			$this->Model->id = $id;
                        $Q=new Query($this->Model);
                        $Q->add(new QueryAnd('id',$id));
			if(!$this->Model->load($Q)){
                            header("location:/funcionario/index");
                            exit();
                        }else{
                            $this->Model->delete();
                        }
			
			$this->_helper->flashMessenger->addMessage('success');
			$this->_helper->flashMessenger->addMessage('El registro fue eliminado correctamente');
                       
			header("location:/funcionario/index/");
			exit();
        }
	
	public function actualizar(){
		try{
			//hidden o tomar valor del boton submit para saber si
			//postearon formulario.
                        $id=$this->getParam('id');
                        
			$do_submit = $this->getParam('do_submit');
                        $Funcionario = Factory::create(FactoryModel::getInstance(), 'Funcionario');
			$this->View->assign('funcionarios', $this->model2List($Funcionario->fetch(),'id','cargo','estado','ingreso','nombre','apellido','email','egreso','codigo'));
                        
                        
                        $this->Model->id = $id;
			$Q = new Query($this->Model);
                        
                        if($id){
				$Q->add(new QueryAnd('id',$id));				
			}
                        if(!$this->Model->load($Q)){
                            
                            throw new \Exception('Identificador no valido');
			}
                        if($do_submit){
				//cargo modelo con parametros del form
				$this->params2Model($this->Model);
				//campos obligatorios
				$this->required($this->Model, array('codigo','cargo','estado','nombre','apellido','email','ingreso'));
                                //invoco create heredado de Model
                                if($_FILES['imagen']['error'] == UPLOAD_ERR_OK){
					$tmp_name = $_FILES["imagen"]["tmp_name"];
					$name = $_FILES["imagen"]["name"];
					$extension = substr($name, strripos($name, '.'));
                                        $pre    = $this->getName();
					$name   = $pre.'_'.$this->Model->id.$extension;
					move_uploaded_file($tmp_name, $this->Config->image->uploads->path.$name);
					$this->Model->imagen = $name;
					$image = new SimpleImage($this->Config->image->uploads->path.$name);
					$image->square($this->Config->image->square);
					$image->save($this->Config->image->uploads->mini.$name);					
				}
                                
                                $this->Model->update();
                                $this->View->assign('model', $this->Model->toArray());
				$this->View->assign('msg', array('success', 'El registro ha sido actualizado correctamente'));
			}
		}
		catch (\Exception $e){
			$this->View->assign('msg', array('error',$e->getMessage()));
		}
                $this->View->assign('titulo', "Listado de: ");
                $this->View->assign('subtitulo', $this->getName());
		$this->View->assign('model', $this->Model->toArray());
                $this->View->assign('id', $this->Model->id);
                
                
                $this->View->assign('estados', array(
                                                        Vigente => 'Vigente',
                                                        Suspendido => 'Suspendido',
                                                        Baja => 'Baja',
                                                        
                                                    ));
            $this->View->assign('cargos', array(
                                                        Promotor => 'Promotor',
                                                        Telemarketers => 'Telemarketers',
                                                        Supervisor => 'Supervisor',
                                                        
                                                    ));
                
               
                
                
		$this->View->display();	
	}
}