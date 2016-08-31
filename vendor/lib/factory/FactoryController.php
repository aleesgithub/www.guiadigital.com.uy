<?php
namespace lib\factory;
use lib\system\Loader;
use lib\exception\LogFileSms;

class FactoryController extends FactoryMethod{
    
    //Si quiero una extension para mis archivos.
    const EXTENSION_FILE = '.php';
    //Si quiero un prefijo para mi nombre de clase.
    const PREFIX         = 'Controller';
    //Ubicacion de mis controladores
    const CONTROLLERS    = 'controllers';
    
    //atributo estatico para Singleton
    static private $instance = null;
    
    private function __construct() {
        //
    }
    
    public function create($class){
        //Creo nombre de archivo
        //strtolower para evitar problemas
        //min,may (Linux).
        $file_name = strtolower($class).self::EXTENSION_FILE;
        //Clase para cargar archivo.
        Loader::load(APP.DS.self::CONTROLLERS, $file_name);
        
        //nombre de la clase.
        $class_name = self::PREFIX.$class;
        
        //verifico que la clase este declarada en el archivo.
        if(!class_exists($class_name)){
            //constante que me devuelve nombreClase::metodo
            throw new LogFileSms(__METHOD__." No se encuentra $class_name
                    en ".self::CONTROLLERS."/$file_name");
        }
        //si no hay error retorno la instancia de la clase.
        return new $class_name;
       
    }
    
    //Singleton patron creacional para obtener
    //unica instancia de una clase.
    public static function getInstance(){
        if(!isset(self::$instance)){
            $C = __CLASS__;
            self::$instance = new $C;
        }
        return self::$instance;
    }
    
}
