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
                $Q->prepare($this);
                $rubros=$this->fetch();
                $resultado=null;
                foreach ($rubros as $key => $value) {
                    $resultado[]=$value[subrubro];
                }
                foreach ($parametros as $key => $value) {
                    
                    if (in_array($value, $resultado)) {
                        return $value;
                    }
                } 
                if (in_array($param, $resultado)) {
                        return $param;
                        
                }
            }else{
                return null;
            }
            return null;
        }
}