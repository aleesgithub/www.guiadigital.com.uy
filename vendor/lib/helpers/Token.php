<?php
namespace lib\helpers;

class Token extends \Zend_Controller_Action_Helper_Abstract{
	
	public function direct($lenght){
		$functions = array(strtolower,strtoupper);
		$return= '';
		$token = array(1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G',
        'H','I','J','K','L','M','N','O','P','Q','R','S','T','W','X','Y','Z');
        for($i=0; $i<$lenght; $i++){
            $j = mt_rand(0, 32);
            $return .= $functions[mt_rand(0,1)]($token[$j]);
        }
        return $return;
	}	
}