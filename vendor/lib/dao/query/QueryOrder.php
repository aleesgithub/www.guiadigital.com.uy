<?php
namespace lib\dao\query;
use lib\dao\Dao;
class QueryOrder extends QueryAbstract{
	public $campo=null;
        public $desc=null;
        
	public function __construct($field, $value = null, $campo=null, $desc=null){
		
                if(is_array($campo) && !empty($campo)){
			$this->order = $campo;
                }elseif($campo){
                    $this->order[] = $campo;
                }
                if($desc){
                    $this->desc = $desc;
                }
                
	}	
	
	public function prepare(\lib\dao\query\Query $Q, $pos = 0){
		$result = null;
		$table = Dao::getTable($Q->Model);
                
                if(is_array($this->order) && !empty($this->order)){
		
                    foreach($this->order as $field ){
			
                            if(property_exists($Q->Model, $field)){
                                $table = Dao::getTable($Q->Model);
                            }else{
                                if(property_exists($Q->Model2, $field)){
                                    $table = Dao::getTable($Q->Model2);
                                }else{
                                     if(property_exists($Q->Model3, $field)){
                                        $table = Dao::getTable($Q->Model3);
                                     }else{
                                         $table='';
                                     }
                                }
                            }
                            
                            


 

                            
                            
                            
                            
                            $pos = strpos($field, " ");
                            
                            $orden='';
                            if ($pos !== false) {
                                $field1= explode(" ",$field);
                                $field=$field1[0];
                                $orden=$field1[1];
                            }
                            if($table){
                                $result .= " , $table.`$field` $orden";
                            }else{
                                $result .= " , `$field` $orden ";
                            }
			}
                        
			$result = ($pos == 0)? substr($result,2):$result;
			
		}
                
		$Q->query .= " Order By ".$result." ".$this->desc;
                 
	}
}