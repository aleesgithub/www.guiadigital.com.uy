<?php
namespace lib\dao\query;
use lib\dao\Dao;
class QueryLike extends QueryAbstract{
	
	private $operand = null;
	
	public function __construct($field, $value = null, $and = true){
		//si viene array campo/valor.
		if(is_array($field) && !empty($field)){
			$this->conditions = $field;
		}
		//si viene campo/valor.
		elseif(!is_null($field) && !is_null($value)){
			$this->conditions[$field] = $value;
		}	
		$this->operand = ($and)?' AND':' OR';
	}	
	
	public function prepare(\lib\dao\query\Query $Q, $pos = 0){
		$result = null;
		if(is_array($this->conditions) && !empty($this->conditions)){
			foreach($this->conditions as $field => $value){
                            if(property_exists($Q->Model, $field)){
                                $table = Dao::getTable($Q->Model);
                            }else{
                                if(property_exists($Q->Model2, $field)){
                                    $table = Dao::getTable($Q->Model2);
                                }else{
                                    $table = Dao::getTable($Q->Model3);
                                }
                            }
                            
                                $result .= $this->operand." $table.`$field` LIKE ?";
				$Q->binds[] = "%$value%";
			}
			$result = ($pos == 0)? substr($result, strlen($this->operand)):$result;
			$result = (is_null($Q->query))? " WHERE $result":$result;
		}
		$Q->query .= $result;
                
	}
}