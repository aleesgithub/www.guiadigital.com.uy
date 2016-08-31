<?php

namespace lib\dao\query;

use lib\dao\DataAccess;
use lib\dao\Dao;
class QueryGroupBy extends QueryAbstract{

	public function __construct($field, $value = null){
		if(is_array($field) && !empty($field)){
			$this->conditions = $field;
		}
		elseif(!is_null($field) && !is_null($value)){
			$this->conditions[$field] = $value;
		}	
	}	
	
	public function prepare(\lib\dao\query\Query $Q, $pos = 0){
		$result = null;
		if(is_array($this->conditions) && !empty($this->conditions)){
			foreach($this->conditions as $field => $value){
				$result .= ", `$field`";
				//$Q->binds[] = $value;
			}
			$result = ($pos == 0)? substr($result,1):$result;
			//$result = (is_null($Q->query))? " WHERE $result":$result;
		}
		$Q->query .= ' GROUP BY '.$result;
	}
}