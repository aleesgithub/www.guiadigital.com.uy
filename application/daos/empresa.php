<?php
use lib\dao\Dao;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;

class DaoEmpresa extends Dao{
	
	public function fetchEmp(\lib\model\Model $M, \lib\dao\query\Query $Q){
		
		$table = $this->getTable($M);
                
                //$query = $Q->prepare($M)->query;
                
                $query = $Q->prepare($M);
		
		
                $sql="SELECT espectaculo, SUM(cantidad) AS cantidad_total, SUM(facturado) AS facturado_total
				  FROM report WHERE categoria='cat1'				  
				  GROUP BY espectaculo  ";
                //$sql   = "SELECT espectaculo, SUM(cantidad) as cantidad_total, SUM(facturado) as facturado_total FROM $table $query GROUP BY espectaculo";
                //echo $sql;
                
		//esto tambien lo puedo sacar de result
		$binds = $Q->binds;
		$Dar   = $this->DataAccess->retrieve($sql, $binds);
		
                return $Dar->fetchAll();
	}
        public function totalespectaculo($categoriaId){
		$sql="SELECT * , SUM(`cantidad`) AS `sum_cantidad`, SUM(`facturado`) AS `sum_facturado` 
                    FROM report,espectaculo 
                    WHERE espectaculo.categoriaId=report.categoriaId 
                    AND espectaculo.categoriaId=".$categoriaId
                   ." GROUP BY report.`espectaculoId` LIMIT 0,10 ";
                $Dar   = $this->DataAccess->retrieve($sql, null);
		return $Dar->fetchAll();
	}
	
	

}