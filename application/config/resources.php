<?php 
//puede estar en DB.
//defino controladores y acciones que deben ser controladas
//por ACL.
//null debo controlar todas las acciones.
//de lo contrario defino que acciones no debo controlar.
return array(
	'login'     => array('index','login','logout'),
	'index'     => array('index'),
	'user'      => null,
        'proyecto'  => null,
        'nota'      => null,
        'evaluacion'=> null,
	'error'     => array('error'),
        
);