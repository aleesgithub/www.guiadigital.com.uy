<?php
namespace lib\interfaces;

interface  ViewInterface {	
	public function assign($var,$val);
	public function display();
}