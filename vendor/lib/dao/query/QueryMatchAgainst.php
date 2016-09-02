<?php
namespace lib\dao\query;
use lib\dao\Dao;
class QueryMatchAgainst extends QueryAbstract{
	public $campo=null;
        public $Rel=null;
	public function __construct($field, $value = null,$campo=null,$Rel=null){
		
                if(is_array($field) && !empty($field)){
			$this->conditions = $field;
		}
		elseif(!is_null($field) && !is_null($value)){
			$this->conditions[$field] = $value;
		}
                if($campo){
                    $this->campo=$campo;
                }
                //si incluye la relevancia como dato.
                if($Rel)$this->Rel=$Rel;
                        
	}	
	
	public function prepare(\lib\dao\query\Query $Q, $pos = 0){
                
		$result = null; 
		if(is_array($this->conditions) && !empty($this->conditions)){
			
                        foreach($this->conditions as $field => $value){
                            
//                            
                            $result.= "$field";
                            
				//echo $result;
			}
                       
                       
                       $result="MATCH (".$result.") Against ('".$value."' IN BOOLEAN MODE) ";
                        
			//$result = (is_null($Q->query))? " WHERE $result":$result;
                        
		}
                if(is_null($Q->query)){
                    $Q->query="WHERE ".$result;
                }else{
                    $Q->query = str_replace("WHERE ", "WHERE ".$result." AND ", $Q->query);
                }
                
                if($this->Rel)$this->campo.=", ".$result." AS Rel";
                
               
               
	}
}