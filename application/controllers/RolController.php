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

class RolController extends Controller{
	
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
                                'rol'=>$this->getParam('search'),
                                'observaciones'=>$this->getParam('search')),'',false));
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
                    $this->required($this->Model, array('rol','observaciones'));
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

            $this->View->assign('model', $this->Model->toArray());
            

            
            //Idioma por defecto.
           
            $this->View->display();	
	}
	
	public function eliminar(){		
			$id = $this->getParam('id');				
			if(empty($id)){
				header("location:/user/index/1");
				exit();
			}
				
			$this->Model->id = $id;
                        $Q=new Query($this->Model);
                        $Q->add(new QueryAnd('id',$id));
			if(!$this->Model->load($Q)){
                            header("location:/user/index");
                            exit();
                        }else{
                            $this->Model->delete();
                        }
			
			$this->_helper->flashMessenger->addMessage('success');
			$this->_helper->flashMessenger->addMessage('El registro fue eliminado correctamente');
                       
			header("location:/user/index/");
			exit();
        }
	
	public function actualizar(){
		try{
			//hidden o tomar valor del boton submit para saber si
			//postearon formulario.
                        $id=$this->getParam('id');
                        $pwd=$this->getParam('pwd');
			$do_submit = $this->getParam('do_submit');
                        $User = Factory::create(FactoryModel::getInstance(), 'User');
			$this->View->assign('users', $this->model2List($User->fetch(),'id','usr','pwd','role','nombre','apellido','email','language'));
                        
                        
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
				$this->required($this->Model, array('usr','pwd','role','nombre','apellido','email','language'));
				//invoco create heredado de Model
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
                                $this->Model->estado='Suspendido';
                                $this->Model->pwd = hash(sha512, $pwd);
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
                
                
                //Roels para seleccionar.
                $this->View->assign('role_options', array(
                                                            AES => 'Administrador Especial',
                                                            INV => 'Invitado',
                                                            USR => 'Usuario',
                                                            REP => 'Reporte',
                                                            ADM => 'Administrador'
                                                        ));
                
                $this->View->assign('role', $this->Model->role);
                
                $this->View->assign('language_options', array(
                                                            es => 'Espa&ntilde;ol',
                                                            en => 'English'
                                                        ));
                
                $this->View->assign('language', $this->Model->language);
                
                
		$this->View->display();	
	}
}