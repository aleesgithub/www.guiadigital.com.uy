<?php
//Clase Abstracta que obliga a subclases a implementar create().
namespace lib\factory;


abstract class FactoryMethod {
    
    abstract public function create($class);
}
