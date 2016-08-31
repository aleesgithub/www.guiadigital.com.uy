<?php
//Clase con metodo estatico.
//Relacion de dependencia con FactoryMethod.
namespace lib\factory;

class Factory {
    public static function create(FactoryMethod $F, $class){
        return $F->create($class);
    }
}
