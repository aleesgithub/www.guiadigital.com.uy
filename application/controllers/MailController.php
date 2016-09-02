<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryIn;
use lib\dao\query\QueryLike;
use lib\dao\query\QueryOrder;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;

//require_once 'PrddController.php';

class MailController extends Controller{
	
	public function index(){
            try{
                $this->getMessages();
                $search = $this->getParam('search');

                $Q = new Query($this->Model);
                if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                     $this->View->assign('jquery', TRUE); 
                }
                if($search){
                        $Q->add(new QueryLike(array(
                        'texto' =>$this->getParam('search'),
                        'estado'=>$this->getParam('search')),'',false));
                }
                $Auth = \Zend_Auth::getInstance();
                $Q->add(new QueryAnd('usuario',$Auth->getIdentity()->usr));   
                $Q->add(new QueryOrder('','','created','desc'));
                //Paginación.
                $P = new QueryLimit($this->getPage(),(int)$this->Config->pagination->rows);
                $Q->add($P);
                $Q->prepare($this->Model);
                //Asigno resultado a la vista
                $this->View->assign('rows', $this->Model->fetch($Q));
                $valor="'".$Auth->getIdentity()->usr."'";
                $Q->add(new QueryIn('usuario',$valor, 'id'));
                $Q->prepare($this->Model);
                $Destinatario = Factory::create(FactoryModel::getInstance(), 'Destinatario');
                $Q3 = new Query($Destinatario);
                $Q3->add(new QueryIn('mailId',$Q->query));
                $Q3->prepare();
                //echo $Q3->query;
                $this->View->assign('enviados', $Destinatario->fetch());
//Destinatarios---------------------------------------------------------------------------------------------------------------------------                
                

//Recibidos-------------------------------------------------------------------------------------------------------------------------------
                //Genera los mail donde el user es registrado como destinatario
                $Q = new Query($this->Model); 
                $Destinatario = Factory::create(FactoryModel::getInstance(), 'Destinatario');
                $Q3 = new Query($Destinatario);
                $valor="'".$Auth->getIdentity()->email."'";
                $Q3->add(new QueryIn('email',$valor,'mailId'));
                $Q3->prepare();
                
                $this->View->assign('mailsIds', $Destinatario->fetch()); 
                $Q->add(new QueryIn('id',$Q3->query));
               
                $this->View->assign('recibidos', $this->Model->fetch($Q));
//---------------------------------------------------------------------------------------------------------------------------------------                
                $this->View->assign('P', $P);
                $this->View->assign('search', $search);
                $this->View->assign('page', $this->getPage());
                //Muestro titúlo el template
                $this->View->assign('titulo', "mis Env&iacute;os:");
                $this->View->assign('controlador', "Pregunta");
                $this->View->display();
            }
            catch (\Exception $e){
                    die($e->getMessage());
            }
        }
	
	public function crear(){
            try{
                if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                    $this->View->assign('jquery', TRUE); 
                }
                $do_submit  = $this->getParam('do_submit');
                $this->View->assign('js','edit');
                $proyectoId =$this->getParam('proyectoId');
                $param      = $this->getParam('param');
                $paramId    = $this->getParam('paramId');
                if($proyectoId){
                    
                    $Nota = Factory::create(FactoryModel::getInstance(), $param);
                    $Q = new Query($Nota);
                    if($param=='Nota'){
                        $Q->add(new QueryAnd('acceso','Publico'));
                        $Q->add(new QueryOrder('','','notaId'));
                    }
                    if($paramId)$Q->add(new QueryAnd('id',$paramId));
                    $Q->add(new QueryAnd('proyectoId',$proyectoId));
                    $Q->add(new QueryAnd('estado','Activo'));
                   
                    $Q->prepare($Nota);
                    $this->View->assign('rows', $Nota->fetch($Q));
                   
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
                    $this->required($this->Model, array('texto'));
                    $this->Model->estado = 'Pendiente';
                    $validator=new Validator();
                    $validator->validoModel($this->Model);
                    $this->Model->create();
                    $Destinatario=Factory::create(FactoryModel::getInstance(), 'Destinatario');
                    $Destinatario->addDestinatario($this->getParam('allto'),$this->Model);
                    $this->clean($this->Model);
                    $this->View->assign('msg', array('success', 'Confirmaci&oacute;n de env&iacute;o'));
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }
            //$this->Model->proyectoId=$proyectoId;
            $this->View->assign('titulo', "Env&iacute;o:");
            //$this->View->assign('subtitulo', $Proyecto->nombre); 
            $this->View->assign('model', $this->Model->toArray());
            $this->View->assign('controller', 'mail');
            //Roels para seleccionar.
            $this->View->assign('table_options', array(
                                                        Privado => 'Privado',
                                                        Protegido => 'Protegido',
                                                        Publico =>'Publico'
                                                    ));

            
            //$this->View->assign('msg', array('success', 'El registro se ha guardado correctamente'));
            $this->View->display();	
	}
	
        public function visualizar(){
            try{
                if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                     $this->View->assign('jquery', TRUE); 
                }
                $mailId =$this->getParam('id');
                $email  =$this->getParam('email');
                if($mailId){
                    
                    $Mail = Factory::create(FactoryModel::getInstance(), 'Mail');
                    $Q = new Query($Mail);
                    
                    $Q->add(new QueryAnd('id',$mailId));
                    $Mail->load($Q);
                    $Mail->estado='Lectura';
                    //$Mail->update();
                    //Actualizo el destinatario como corro visualizado
                    $Destinatario = Factory::create(FactoryModel::getInstance(), 'Destinatario');
                    $Q1 = new Query($Destinatario);
                    $Q1->add(new QueryAnd('mailId',$mailId));
                    $Q1->add(new QueryAnd('email',$email));
                    //$Q1->prepare();
                    //echo $Q1->query;
                    $Destinatario->load($Q1);
                    $Destinatario->estado='Lectura';
//                    
                    date_default_timezone_set('America/Montevideo');  
                    $Destinatario->lectura = date("Y-m-d H:i:s");
                    $Destinatario->update();
                    $this->View->assign('Mail', $Mail->texto);
//                    
                }
            }
            catch (\Exception $e){
                    $this->View->assign('msg', array('error',$e->getMessage()));
            }
            //$this->Model->proyectoId=$proyectoId;
            $this->View->assign('titulo', "Env&iacute;o:");
            //$this->View->assign('subtitulo', $Proyecto->nombre); 
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
	
        public function autocomplete(){
            if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                             $this->View->assign('jquery', TRUE); 
                        }
            //Para uso por ajax
            $param=$this->getParam('param');
            $User   = Factory::create(FactoryModel::getInstance(), 'User');
            $Q      = new Query($User);
            
            if($param){
                $Q->add(new QueryLike(array(
                                            'usr'       =>$param,
                                            'nombre'    =>$param,
                                            'apellido'  =>$param,
                                            'email'     =>$param,
                                            'sector'    =>$param
                                            ),'',false));
            }
            $Q->add(new QueryLimit((int)-1,(int)$this->Config->pagination->rows));
            $rows=$User->fetch($Q);
            $retorno=array();
            if(is_array($rows)&& !empty($rows)){
                foreach($rows as $row) {
                    $usuario[nombre]=utf8_encode($row[nombre]);
                    $usuario[apellido]=utf8_encode($row[apellido]);
                    $usuario[email]=$row[email];
                    $retorno[]=$usuario; 
                }
            }else{
                $usuario[email]     =$param;
                $usuario[nombre]    =  md5($param);
                $usuario[apellido]  ='b';
                
                $retorno[]=$usuario; 
            }
            $this->View->assign('rows',$retorno);
            $this->View->display();
        }
       
        public function eliminar(){
            try{
                $Auth = \Zend_Auth::getInstance();
		
                
                $id = $this->getParam('id');				
                if(empty($id)){
                        header("location:/mail/index/");
                        exit();
                }

                $this->Model->id = $id;
                $Q=new Query($this->Model);
                $Q->add(new QueryAnd('id',$id));
                if(!$this->Model->load($Q)){
                    header("location:/mail/index");
                    exit();
                }else{
                    $this->Model->delete();
                }

                $this->_helper->flashMessenger->addMessage('success');
                $this->_helper->flashMessenger->addMessage('El registro fue eliminado correctamente');

                header("location:/mail/index/");
                exit();
            }
		catch (\Exception $e){
			$this->View->assign('msg', array('error',$e->getMessage()));
                       
		}
        }

        public function viewnotify(){
            if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
                 $this->View->assign('jquery', TRUE); 
            }
            $Auth = \Zend_Auth::getInstance(); 
            $Destinatario = Factory::create(FactoryModel::getInstance(), 'Destinatario');
            $Q1 = new Query($Destinatario);
            $Q1->add(new QueryAnd('email',$Auth->getIdentity()->email));
            $Q1->add(new QueryAnd('estado','Pendiente'));
            $Q1->prepare();
            $cantDest=count($Destinatario->fetch($Q1));
            //echo $cantDest;
                
        }
}
