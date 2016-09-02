<?php
namespace lib\dao\query;
use lib\dao\Dao;
class Query{

	public $statements      = null;
	public $order		= array();
	public $pagination	= null;
	public $register	= null;
	public $sum		= array();
        public $in		= null;
	public $query		= null;
        public $matchagainst    = null;
	public $Model		= null;
        public $Model2		= null;
        public $Model3		= null;
	public $binds		= array();
	public $campo           = null;
	public function add(QueryAbstract $Statement){
		$this->statements[] = $Statement;
	}
	
	public function __construct(\lib\model\Model $M,\lib\model\Model $M2=null,\lib\model\Model $M3=null, $campo='*'){
		$this->Model    = $M;
                $this->Model2   = $M2;
                $this->Model3   = $M3;
                $this->campo    = $campo;//Los campos que quiero traer
	}
	
	public function prepare(){		
		
                $this->binds    	= array();
		$this->order		= array();
		$this->pagination 	= null;
                $this->groupby          = null;
                $this->in               = null;
		$this->query		= null;
                $this->matchagainst     = null;
		//$this->campo            =' * ';
                
                
                
		if(is_array($this->statements) && !empty($this->statements)){
			foreach ($this->statements as $pos=>$Statement){
                                if($Statement->campo){
                                    $this->campo=$Statement->campo;
                                   
                                }
				if(get_class($Statement) == 'lib\dao\query\QueryOrder'){
					$this->order[] = $Statement;
                                        
					continue;
				}
                               
				if(get_class($Statement) == 'lib\dao\query\QueryLimit'){
					$this->pagination = $Statement;
					continue;
				}	
                                if(get_class($Statement) == 'lib\dao\query\QueryGroupBy'){
					$this->groupby = $Statement;
					continue;
				}
                                if(get_class($Statement) == 'lib\dao\query\QuerySum'){
					$this->sum = $Statement;
					continue;
				}
                                if(get_class($Statement) == 'lib\dao\query\QueryIn'){
					$this->in = $Statement;
					continue;
				}
                                if(get_class($Statement) == 'lib\dao\query\QueryMatchAgainst'){
					$this->matchagainst = $Statement;
					continue;
				}
                                
				$Statement->prepare($this, $pos);
                               
			}					
		}
		if(is_object($this->matchagainst)){
                    
                    $this->matchagainst->prepare($this);
                    $this->campo.=$this->matchagainst->campo;
                    
		}
		if(is_object($this->in)){
                    
                    $this->in->prepare($this,$pos);
                    //$this->query.="(".$this->query.")";
		}
               
		if(is_array($this->order) && !empty($this->order)){
			foreach ($this->order as $pos=>$Statement){	
				$Statement->prepare($this, $pos);
			}			
		}
                
		if(is_object($this->groupby)){
			$this->groupby->prepare($this);	
		}
                
		if(is_object($this->pagination)){
			$this->pagination->prepare($this);	
		}
		
                if(is_object($this->sum)){
                    
                    $this->campo=' * '.$this->sum->prepare($this);
		}
                
                
		$table = Dao::getTable($this->Model);
		 
                
                //$this->query = "SELECT $this->campo  FROM $table ".$this->query;
               
                if(!is_null($this->Model2)){
                    $table2 = Dao::getTable($this->Model2);
                    
                    
                    $sql="SELECT $this->campo  FROM $table  Left Join $table2 ON $table.id=$table2.".$table."Id ";
                    if(!is_null($this->Model3)){
                        $table3 = Dao::getTable($this->Model3);

                        $this->query = $sql." Left Join $table3 ON $table2.$table3"."Id=$table3.id ".$this->query;
                      
                    }else{
                        $this->query = $sql.$this->query;
                    }
                }else{
                    $this->query = "SELECT $this->campo  FROM $table  ".$this->query;
                }
                //echo $this->query;
                return $this->query;
                 
	}
	
	public function dump(){
		var_dump($this->query);
		var_dump($this->binds);
	}
	
}	