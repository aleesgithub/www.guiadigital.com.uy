<?php

namespace lib\dao\query;

use lib\dao\DataAccess;
use lib\dao\Dao;
class QueryLimit extends QueryAbstract{

	public $total  	= null;
	public $numRows   	= null;
	public $start  	= null;

	function __construct($start, $num_rows) {
		if(!is_int($num_rows) || $num_rows == 0){
			throw new \Exception(get_class($this).' invalid num_rows in __construct');			
		}
		if(!is_int($start)){
			throw new \Exception(get_class($this).' invalid start in __construct');
		}
		$this->numRows  = $num_rows;
		$this->start    = $start;
	}

	public function getLast(){
		return ceil($this->total/$this->numRows);
	}
	public function getNext(){
		return $this->start + 1;
	}
	public function getPrevious(){
		return $this->start - 1;
	}
	public function getFirst(){
		return 1;
	}
	
	public function prepare(\lib\dao\query\Query $Q, $pos = 0){
		$Da   = DataAccess::getInstance(); 
                $table=Dao::getTable($Q->Model);
                 if(!is_null($Q->Model2)){
                    $table2 = Dao::getTable($Q->Model2);
                    
                    $sql = "SELECT COUNT(*) as total  FROM $table  Left Join $table2 ON $table.id=$table2.".$table."Id ";
                    if(!is_null($Q->Model3)){
                        $table3 = Dao::getTable($Q->Model3);

                        $sql = $sql." LEFT JOIN $table3 ON $table2.$table3"."Id=$table3.id ".$this->query;
                        
                    }else{
                        $sql = $sql.$Q->query;
                    }
                }else{
                    $sql = "SELECT COUNT(*) as total  FROM $table  ".$Q->query;
                }
                
                
		//$sql  = "SELECT COUNT(*) as total FROM ".Dao::getTable($Q->Model).$Q->query;
		
                $Dar  = $Da->retrieve($sql, $Q->binds);
		
		$total = $Dar->fetch();
		$this->total = $total['total'];

		if($this->start < 1){
			$this->start = 1;
		}
		elseif($this->start > $this->getLast()){
			$this->start = $this->getLast();
		}
                $inicio=($this->start - 1) * $this->numRows;
                if($inicio<0){
                    $inicio=0;
                }
		$Q->query .= ' LIMIT '.$inicio.','.$this->numRows;
	}
}