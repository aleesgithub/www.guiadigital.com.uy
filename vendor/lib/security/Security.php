<?php
namespace lib\security;

use lib\dao\DataAccess;
use lib\model\Privilegio;
use lib\model\Rol;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\factory\Factory;
use lib\factory\FactoryModel;

class Security{
	function login($usr, $pwd){
            try{
            //encripto pwd
                $pwd = hash('sha512', $pwd);
                //creo instancia Auth
                $Auth = \Zend_Auth::getInstance();
                $authAdapter = new \Zend_Auth_Adapter_DbTable(DataAccess::getInstance());
                //le digo que tabla,campos autentican
                $authAdapter->setTableName('user');
                $authAdapter->setIdentityColumn('usr');
                $authAdapter->setCredentialColumn('pwd');

                $authAdapter->setIdentity($usr);
                $authAdapter->setCredential($pwd);
                //retorna un objeto result(resultado de autenticar) 
                //con un flag SUCCESS o FAILED que accedo con valid() que
                //retorna true o false.
                $result = $Auth->authenticate($authAdapter);
                //si resultado valido, grabo usuario en sesion(fixed)
                if($result->isValid()){
                        $usrData = $authAdapter->getResultRowObject(null, 'pwd');
                        $Auth->getStorage()->write($usrData);
                        return true;
                }
                return false;
            }catch (\Exception $e){
                $e->getMessage();
            }
	}
	
	
	function autorizar(\lib\controller\Controller $C){
		$Auth   = \Zend_Auth::getInstance();
                $role   =$Auth->getIdentity()->role;
		//Implemento resources desde base de datos--------------------------------------------------------------
		$P = Factory::create(FactoryModel::getInstance(), 'privilegio');
                $Q= new Query($P);
                //$Q->add(new QueryAnd('rolRol',$role));
                $privilegios=$P->fetch($Q);
                $resources  =null;
                $allow      =null; //defino array de recursos de acl
                $roles      =null;
                foreach($privilegios as $privilegio){
                    $controller = $privilegio['controller'];
                    $method     = $privilegio['method'];
                    $resource   = $privilegio['resource'];
                    $rol        = $privilegio['rolRol'];
                    $acl        = $privilegio['acl'];
                    
                    if(!$role){
                        $role='USR';
                    }
                    
                    if(!in_array($rol, $roles)){
                        $roles[]=$rol;
                    }
                    
                    if(!array_key_exists($controller, $resources) && ($resource==1 || $resource==null )){
                        
                        if($resource==null){
                            $resources[$controller]=null;
                        }else{
                            $resources[$controller]=array();
                        } 
                    }
                    
                    if(!in_array($method, $resources[$controller]) && ($resource==1 || $resource==null) && $rol==$role){
                        
                        if(!$resource==null){
                            
                            $resources[$controller][]=$method;
                        } 
                    }  

                    if(!array_key_exists($rol, $allow)){
                        $allow[$rol]=array();
                        //echo $rol."<BR>";
                    }
                    if(!array_key_exists($controller, $alows[$rol])&& $acl==1){
                        //var_dump($allow[$rol]);
                        //$allow[$rol][$controller]=array();
                        //echo $controller."<BR>";
                    }
                    if(!in_array($method, $allow[$rol][$controller])&& $acl==1){
                        $allow[$rol][$controller][]=$method;
                       // echo $method."<BR>";
                    } 

                }
                //var_dump($allow);echo"<br>";echo"<br>";var_dump($resources);die;
                //$resources = require APP.DS.'config'.DS.'resources.php'; 
                //var_dump($roles);
                
                $controller = strtolower($C->getRequest()->getControllerName());
		$action     = strtolower($C->getRequest()->getActionName());
                
		if(is_array($resources[$controller])){
                    if(is_null($resources[$controller])){
                        //echo "Es un array y es null";
                        return true;
                    }
                    if(in_array($action, $resources[$controller])){
                        //echo "Es un array y es metodo esta en el resources";
                        
                        return true;
                    }
		}
		
		$Auth = \Zend_Auth::getInstance();
		if(is_object($Auth) && !is_null($Auth->getIdentity())){
                        //echo "entra";
                        $Acl = new \Zend_Acl();
			$role = $Auth->getIdentity()->role;
			
			//$roles =require APP.DS.'config'.DS.'roles.php';
			foreach($roles as $rol){
				$Acl->addRole(new \Zend_Acl_Role($rol));
			}
						
			
			foreach($resources as $key=>$value){
				$Acl->add(new \Zend_Acl_Resource($key));
			}
			
                        //$allow = require APP.DS.'config'.DS.'acl.php';
			
			foreach($allow as $roleAcl=>$resourcesAcl){
                            if(empty($resourcesAcl)){
                                $Acl->allow($roleAcl);
                                continue;
                            }
                            foreach($resourcesAcl as $resource=>$actions){
                                $Acl->allow($roleAcl, $resource, $actions);
                            }				
			}
			return $Acl->isAllowed($role, $controller, $action);
		}
		return false;
	}
}