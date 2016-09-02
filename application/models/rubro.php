<?php

use lib\model\Model;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
class Rubro extends Model{
	public $rubro   = null;
        public $subrubro= null;

        
        public function existsRubro($param=null){
            
            if(!is_null($param)){
                $parametros = explode(' ',$param);
                $Rubro      = Factory::create(FactoryModel::getInstance(), 'Rubro');
                $Q          = new Query($Rubro);
                //$Q->prepare($this);
                $rubros=$this->fetch($Q);
                
                $resultado=null;
                foreach ($rubros as $key => $value) {
                    $resultado[]=$value[subrubro];
                    
                }
                $resultado= array_map(strtolower, $resultado);
                $retorno='';
                foreach ($parametros as $key => $value) {
                    
                    if (array_search(strtolower($value), $resultado)) {
                        $retorno.=",". $value;
                    }
                    
                } 
                
               
                return substr($retorno, 1);
                
            }else{
                return null;
            }
            return null;
        }
}