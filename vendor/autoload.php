<?php
class Autoloader
{
	public static function ZendLoader($class){
		$file_name  = '';
		$name_space = '';
		
		$class_name = $class;
		if($pos = strripos($class, '_')){
			$class_name = substr($class, $pos + 1);
			$name_space = substr($class, 0, $pos);
			$file_name  = str_replace('_', DIRECTORY_SEPARATOR, $name_space)
			.DIRECTORY_SEPARATOR;
		}
		$file_name .= $class_name.'.php';
		$path		= VENDOR.DIRECTORY_SEPARATOR.$file_name;
		if(file_exists($path)){
			require_once $path;
		}				
	}

	public static function LibraryLoader($class){
		//$class nombre de clase o namespace
		$file_name  = '';
		$name_space = '';
	
		$class_name = $class;
	
		if($pos = strripos($class,'\\')){
			$name_space = substr($class, 0, $pos);
			$class_name = substr($class, $pos + 1);
			$file_name = str_replace('\\', DIRECTORY_SEPARATOR, $name_space).DIRECTORY_SEPARATOR;
		}
	
		$file_name .= $class_name.'.php';
		$path		= VENDOR.DIRECTORY_SEPARATOR.$file_name;
	
		//echo $path.'<br>';
		if(file_exists($path)){
			require_once $path;
		}	
	}
}

spl_autoload_register('Autoloader::LibraryLoader');
spl_autoload_register('Autoloader::ZendLoader');	