<?php
require_once 'prdd.php';
class Capitulo extends Prdd{
	
	
	public $nombre      = null;
	public $capituloId  = null;
        public $orden       = null;
	
    public function defaultCapitulo($id, $usuario){
        //Array que contiene los nombres de las capitulos comunes a todos los procedimientos
        $names= Array('Objetivo','Alcance','Referencia','Procedimiento');
        //Genero los capitulos que <=> tiene que contener un proyecto
        foreach ($names as $value) {

            $this->nombre       = utf8_decode($value);
            $this->proyectoId   = $id;
            $this->usuario      = $usuario;
            $this->texto        = utf8_decode($value);
            $this->estado       = "Activo";
            $this->capituloId       = 1;
            $this->orden            =1;
            $this->create();
        }
    }
}

