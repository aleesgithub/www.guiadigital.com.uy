<?php
namespace lib\patterns;

class ServiceLocator{
	
	public static function getConfig(){
		try{
                    $config = new \Zend_Config_Ini(APP.DS.'config'.DS.'config.ini', getenv('APPLICATION_ENV'));
                        
		}
		catch (\Exception $e){
			try{
				$config = new \Zend_Config_Ini(APP.DS.'config'.DS.'config.ini', getenv('SERVER_ADDR'));
			}
			catch (\Exception $e){
				//no mostrar $e->getMessage, muestra el path de donde esta buscando config.ini
				throw new \Exception(__CLASS__.':'.get_class($e).' file config.ini not found...');
			}
		}
                
		return $config;
	}	
	
	public static function getTranslate($lang = 'en'){
		$Config  = self::getConfig();
		switch ($Config->language->adapter){
			case 'tmx':
				$path = $Config->language->path.$Config->language->adapter.DS.'language.tmx';
				break;
			case 'array':
				$path = $Config->language->path.$Config->language->adapter.DS.'language.php';
				break;
			case 'csv':
				$path = $Config->language->path.$Config->language->adapter.DS.'language.csv';
				break;
			case 'gettext':
				$path = $Config->language->path.$Config->language->adapter.DS."$lang.mo";
				break;
			default:
				$path = $Config->language->path.$Config->language->adapter.DS.'language.tmx';
				break;
		}
		
		$translate = new \Zend_Translate(
				array(
						'adapter' => $Config->language->adapter,
						'content' => $path,
						'locale'  => $lang
				)
		);
		return $translate;
	}
}