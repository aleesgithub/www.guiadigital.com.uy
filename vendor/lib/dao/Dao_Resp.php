<?php
//Encapsula desde el modelo el acceso a datos.
namespace lib\dao;
use lib\system\Lib;
class Dao extends Lib{
	
	protected $DataAccess = null;
	
	function __construct(){
		$this->DataAccess = DataAccess::getInstance();
	}
	
	public static function getTable(\lib\model\Model $M){
		$table = get_class($M);
		$table = strtolower($table);
		return $table;
	}
	
	public function create(\lib\model\Model $M){
		//clave nombre atributo/ valor valor del atributo.
		$atributos = $M->toArray();
		unset($atributos['id']);
		
		//Recorro atributos y construyo campos y values de insert
		foreach($atributos as $att=>$val){
			if(!is_object($val)){
				$fields .= ",$att";
				$values .= ",'$val'";
			}
		}
		
		$table = $this->getTable($M);
		
		$fields = substr($fields, 1);
		$values = substr($values, 1);
		
		$sql = "INSERT INTO $table ($fields)
				VALUES ($values)";
		
		$this->DataAccess->execute($sql);
		
		$M->id = $this->DataAccess->lastInsertId();
	}
	
	public function update(\lib\model\Model $M){
		//clave nombre atributo/ valor valor del atributo.
		$atributos =  $M->toArray();
		//Recorro atributos y construyo campos y values de insert
		foreach($atributos as $att=>$val){
			if(!is_object($val)){
				$fields .= ",$att='$val'";
			}				
		}
		
		$id = $M->id;
		
		if(is_null($id)){
			return;
		}
		$table = $this->getTable($M);
		$fields = substr($fields, 1);
		
		$sql = "UPDATE $table SET
				$fields WHERE id = $id";
	
		$this->DataAccess->execute($sql);	
	}

	public function delete(\lib\model\Model $M){
		$id = $M->id;
		
		if(is_null($id)){
			return;
		}
		$table = $this->getTable($M);
		
		$sql = "DELETE FROM $table 
				WHERE id = $id";
		
		$this->DataAccess->execute($sql);
	}
	
	public function fetch(\lib\model\Model $M, \lib\dao\query\Query $Q = null){
		$table = $this->getTable($M);
              
		$sql = (is_object($Q))?$Q->prepare($M):"SELECT * FROM $table";
		
		$binds = (is_object($Q))?$Q->binds:array();
		//Representa resultado obtenido de acceder a base de datos.
		
                $Dar = $this->DataAccess->retrieve($sql,$binds);	
		return $Dar->fetchAll();
	}
	
	public function load(\lib\model\Model $M, \lib\dao\query\Query $Q){
		$table = $this->getTable($M);		
		$sql = (is_object($Q))?$Q->prepare($M):"SELECT * FROM $table";
		
		$binds = (is_object($Q))?$Q->binds:array();
		$Dar = $this->DataAccess->retrieve($sql,$binds);	
		
		if($row = $Dar->fetch()){
			foreach($row as $att=>$val){
				$M->$att = $val;
			}	
			return true;
		}
		return false;		
	}
        public function describe(\lib\model\Model $M){
            $table = $this->getTable($M); 
            $binds = (is_object($Q))?$Q->binds:array();
            $sql = "describe $table";
            
            $Dar = $this->DataAccess->retrieve($sql,$binds);	
            return $Dar->fetchAll();
        }
}
