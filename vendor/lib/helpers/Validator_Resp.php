<?php
namespace lib\helpers;

class Validator extends \Zend_Controller_Action_Helper_Abstract{
	
    public $Model= null;
   
    public function validoModel(\lib\model\Model $M){
        $this->Model=$M;
        $methodexclude=array('created','updated','id','lastLog','lastIp');
        $methodreserv =array('cedula','email');
        $var=$M->describe();
        
        foreach ($var as $key => $value) {
            $campo=$var[$key]['Type'];
            $valor=$var[$key]['Field'];
            if($pos = strpos($campo,'(')){
                $metodo= substr($campo, 0, $pos);
                if($pos2 = strpos($campo,')')){
                   $param=substr($campo, $pos+1, $pos2-$pos-1);
                }
            }else{
                $metodo=$campo;
            }
            if(!in_array($valor, $methodexclude)){
               
                if(in_array($valor, $methodreserv)){      
                    
                    if(method_exists($this, $valor)){
                        $this->$valor($valor,$param);
                    }
                }else{  
                    
                    if(method_exists($this, $metodo)){
                        $this->$metodo($valor,$param);
                    }
                }
            }          
        $param=0;
            
        }
    }
    public function email($valor, $param=0){
       
        $correo=$this->Model->$valor;
        $v=new \Zend_Validate_EmailAddress();
        if(!$v->isValid($correo)){
            
            throw new \Exception('Correo Invalido');
        }
         if(strlen($valorM)>$param){
        
            
            throw new \Exception("El ".ucwords(strtolower($valor))." no puede superar los ".$param."  caract&eacute;res");
        }
    }
    public function int($valor, $param=0){
        $valorM=$this->Model->$valor;
        if(!empty($valorM)){
            $v=new \Zend_Validate_Int();
            if(!$v->isValid($valorM)){
                throw new \Exception(ucwords(strtolower($valor)).' inv&aacute;lido');
            }
            if(strlen($valorM)>$param){
                throw new \Exception("El '".ucwords(strtolower($valor))."', no puede superar los ".$param."  caract&eacute;res");
            }
        }else{
            throw new \Exception("El '".ucwords(strtolower($valor))."', no puede ser vac&iacute;o.");
        }
    }
    public function varchar($valor, $param=0){
        $this->char($valor, $param);
    }
    public function text($valor, $param=0){
        
        if(!$param>0){
            $param=99999;} 
        $this->char($valor, $param);
    }
    public function char($valor, $param=0){
        $valorM=$this->Model->$valor;//recibo el nombre del atributo y el largo del mismo.
        
        $exceptions = array(".", "-", "'", "(", ")", "&", "ó", "ñ", "Ñ", "ú", "é", "á", "í", ",", ";","<",">","/","\"","=","_",":","#");
        $valorReplace = str_replace($exceptions, "", $valorM);
        
        //$v=new \Zend_Validate_Alnum(array('allowWhiteSpace'=>true));
        if(!empty(trim($valorM))){
            
                    
            if(!preg_match("/^[a-zA-Z0-9 áéíóúAÉÍÓÚÑñü$&%-:\\n\\r]+$/",utf8_encode($valorReplace))){
                throw new \Exception("'".ucwords(strtolower($valor)). "' El texto contiene caracteres no permitidos'");
            }
            if(strlen($valorM)>$param){
                throw new \Exception("El '".ucwords(strtolower($valor))."' no puede superar los ".$param."  caract&eacute;res");
            }
        }else{
            throw new \Exception("El '".ucwords(strtolower($valor))."', no puede ser vac&iacute;o.");
        }
    }
    public function date($valor, $param=0){
        $this->datetime($valor, $param);    
    }
    public function datetime($valor, $param=0){
        $valorM=$this->Model->$valor;//recibo el nombre del atributo y el largo del mismo.
        $v=new \Zend_Validate_Date();
        if(!$v->isValid($valorM)){
            throw new \Exception("'".ucwords(strtolower($valor))."' es del tipo fecha.");
        }        
    }
    public function time($valor, $param=0){
        $valorM=$this->Model->$valor;//recibo el nombre del atributo y el largo del mismo.
        $pattern="/^([0-1][0-9]|[2][0-3])[\:]([0-5][0-9])[\:]([0-5][0-9])$/";
        if(preg_match($pattern,$valorM))
            return;
        throw new \Exception("El campo '".ucwords(strtolower($valor))."' es del tipo 'Time' con formato 'HH:MM:SS'.");
    }
    public function enum($valor, $param=0){
        
        $options=explode(",", str_replace("'","",$param));
        $valorM=$this->Model->$valor;//recibo el nombre del atributo y el largo del mismo.
        
        if(is_array($options)){
            if(!in_array(($valorM),$options)){
                throw new \Exception("El campo '".ucwords(strtolower($valor))."' es incorrecto.");
            }
        }
    }
    public function cedula($valor, $long=0){
        //controles para la cédula;
    }
}