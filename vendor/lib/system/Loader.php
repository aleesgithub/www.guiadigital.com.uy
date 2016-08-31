<?php
namespace lib\system;
use lib\exception\LogFileSms;

class Loader {
    
    public static function load($dir,$file){
        //constante dependiente S.O
        $path = $dir.DIRECTORY_SEPARATOR.$file;
        if(!file_exists($path)){
        	//no recomendable mostrar path en entorno produccion.
            throw new LogFileSms("No se encuentra $path", 404);            
        }
        require_once ($path);
    }
}
