<?php
//Comportamiento generico a todas las clases de mi aplicacion.
namespace lib\system;

class Lib {

	//Sobrecarga de atributos y metodos.
	
	public function __toString(){
		return __CLASS__;
	}

	public function __get($att){
		throw new \Exception("No existe atributo $att en ".get_class($this));
	}
	
	public function __set($att, $val){
		throw new \Exception("No se asigno $val, no existe
				atributo $att en ".get_class($this));
	}

	public function __call($method, $args){
		throw new \Exception("No existe $method en ".get_class($this));
	}
}
