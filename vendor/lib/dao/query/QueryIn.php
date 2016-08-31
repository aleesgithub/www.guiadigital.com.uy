<?php
namespace lib\dao\query;
use lib\dao\Dao;
class QueryIn extends QueryAbstract{
	private $operador   	= null;
        
	public function __construct($field, $value, $campo='*',$operador='AND'){
             
            
            if(is_array($field) && !empty($field)){
			$this->conditions = $field;
            }
            elseif(!is_null($field) && !is_null($value)){
                    $this->conditions[$field] = $value;
            }	
            if(!empty($campo)){
                
                $this->campo=$campo;
            }
            if($operador){
                $this->operador=$operador;
                
            }
            
             
	}	
	
	public function prepare(\lib\dao\query\Query $Q, $pos=0){
		
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
                            
                            $result .= " $this->operador $table.`$field` in ($value)";
				
			}
				
			
			$result = ($pos == 0)? substr($result,4):$result;
			$result = (is_null($Q->query))? " WHERE $result":$result;
                        
		}
		$Q->query .= $result;
                
               
	}
}