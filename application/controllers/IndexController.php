<?php
use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryLike;

class IndexController extends Controller{

	
	public function index(){
		try{
			//Muestro template
			$this->View->layout = 'frontend';
			$this->View->display();
		}
		catch (\Exception $e){
			die($e->getMessage());
		}
	}
	
	
}