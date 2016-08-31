<?php
namespace lib\dao\query;
use lib\dao\Dao;
class QueryAnd extends QueryAbstract{
	public $campo=null;
        
	public function __construct($field, $value = null,$campo=null){
		
                if(is_array($field) && !empty($field)){
			$this->conditions = $field;
		}
		elseif(!is_null($field) && !is_null($value)){
			$this->conditions[$field] = $value;
		}
                if($campo){
                    $this->campo=$campo;
                }
	}	
	
	public function prepare(\lib\dao\query\Query $Q, $pos = 0){
               // $pos--;
                
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
                            
                            $result .= " AND $table.`$field` = '$value'";
                            
				//$Q->binds[] = $value;
			}
                       
                        
                        $posw = strpos($Q->query, 'WHERE');

                       
			$result = (!$posw)? substr($result,4):$result;
                        
			$result = (is_null($Q->query))? " WHERE $result":$result;
                        
		}
		$Q->query .= $result;
                
	}
}