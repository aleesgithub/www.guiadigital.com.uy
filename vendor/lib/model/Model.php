<?php
//Comportamiento generico para todos los modelos.
namespace lib\model;
use lib\system\Lib;
use lib\dao\Dao;
use lib\factory\FactoryDao;
use lib\factory\Factory;

class Model extends Lib {

	public 		$Dao  		= true;
	public 		$id		= null;
	public 		$created 	= '0000-00-00 00:00:00';
	public 		$updated	= '0000-00-00 00:00:00';	
	
	function __construct(){
		if ($this->Dao) {
			try{
				$this->Dao = Factory::create(FactoryDao::getInstance(), get_class($this));
			}
			catch (\Exception $e){
				if($e->getCode() == 404){
					$this->Dao = new Dao();
				}
				else{
					throw $e;
				}
			}	
		}		
	}
	//Metodos comunes para hacer un CRUD de modelo.
	
	public function create(){
                if($this->created=='0000-00-00 00:00:00'){
                    //date_default_timezone_set('America/Argentina/Buenos_Aires');
                    date_default_timezone_set('America/Montevideo');  
                    $this->created = date("Y-m-d H:i:s");
                }
		$this->Dao->create($this);
	}
	
	public function update(){
                date_default_timezone_set('America/Montevideo');  
		$this->updated = date("Y-m-d H:i:s");
		$this->Dao->update($this);
	}
	
	public function delete(){
		$this->Dao->delete($this);
	}
	
	public function fetch(\lib\dao\query\Query $Q = null){
		//retorna array.
		return $this->Dao->fetch($this, $Q);		
	}
	
	public function load(\lib\dao\query\Query $Q){
		//retorna true o false, si carga o no.
		
                return $this->Dao->load($this, $Q);
	}

	public function toArray(){
		return get_object_vars($this);
	}
        public function describe(){
            return $this->Dao->describe($this);
        }
        public function toString(array $array ){
            $result=null;
            if(is_array($array)){
                foreach ($array as $key => $value) {
                    $result.=",".$key.",".$value;
                }  
            }
            $result =substr($result,1);
            
            return $result;
        }
        public function information_schema(){
            return $this->Dao->information_schema($this);
        }
}
