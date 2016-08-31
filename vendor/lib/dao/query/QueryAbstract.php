<?php
namespace lib\dao\query;

abstract class QueryAbstract{
	
	protected $conditions = null;
	
	public function add($field, $value){
		$this->conditions[$field]  = $value;
	}
	
	public abstract function prepare(\lib\dao\query\Query $Q, $pos = 0);
}