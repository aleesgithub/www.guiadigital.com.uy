<?php
namespace lib\dao;
use lib\patterns\ServiceLocator;

class DataAccess extends \Zend_Db_Adapter_Mysqli {	
	
	static private $instance = null;	
	
	public function __construct(){
		$config = ServiceLocator::getConfig();
		parent::__construct($config->database->params->toArray());
	}
	
	public function execute($sql, $binds = array()){
		
                $Dar = new DataAccessResult($this, $sql);
		$Dar->_execute($binds);
	}
	
	public function retrieve($sql, $binds = array()){
		$Dar = new DataAccessResult($this, $sql);
                $Dar->_execute($binds);
		
                return $Dar;				
	}
	
	public static function getInstance(){
		if(!isset(self::$instance)){
			$C = __CLASS__;
			self::$instance = new $C;
		}
		return self::$instance;
	}	
}