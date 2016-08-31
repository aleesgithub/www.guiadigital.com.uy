<?php
use lib\model\Model;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryIn;
use lib\factory\Factory;
use lib\factory\FactoryModel;

use lib\comunication\Comunication;
class Empresarubro extends Model{
	
	
    public $empresaId   	= null;
    public $rubroId        	= null;
    public $estado		= null;
   	
    
    
    public function addEmpresarubro($allrubro,$modelEmpresa){
        if(preg_match('#^;.*#s',$allrubro)){
            $allrubro=substr($allrubro,1);
        }
        $rubros= explode(";", $allrubro);
        $Auth = \Zend_Auth::getInstance();
        foreach ($rubros as $value) {
            $this->empresaId=$modelEmpresa->id;
            $this->rubroId=$this->obtenerrubroId($value);
            $this->estado='Vigente';
            $this->create();
        }
    }
    public function modifyEmpresarubro($allrubro,$modelEmpresa){
        $Q= new Query($this);
        $Q->add(new QueryAnd('empresaId',$modelEmpresa->id));
        $Q->prepare($this);
        $result=$this->fetch($Q);
        foreach ($result as  $value) {
            $this->id=$value['id'];
            $this->delete();
        }
        $this->addEmpresarubro($allrubro, $modelEmpresa);
    }
    private function obtenerrubroId($subrubro){
        $Rubro = Factory::create(FactoryModel::getInstance(), 'Rubro');
        $Q= new Query($Rubro);
        $Q->add(new QueryAnd('subrubro',$subrubro));
        $Rubro->load($Q);
        
        if(!$Rubro->id>0){
           $Rubro->subrubro =$subrubro;
           $Rubro->rubro    ='Otros';
           $Rubro->create();
        }
        return $Rubro->id;
    }
	
}

