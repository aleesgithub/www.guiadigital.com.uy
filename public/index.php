<?php
//phpinfo();die;
//Mostrar errores/warnings/notice de PHP.
ini_set('display_errors', 1);

define('ROOT', dirname(__DIR__));
define('VENDOR', ROOT.DIRECTORY_SEPARATOR.'vendor');
define('APP', ROOT.DIRECTORY_SEPARATOR.'application');
define('TEMPLATES', APP.DIRECTORY_SEPARATOR.'templates');
define('DS', DIRECTORY_SEPARATOR);

require_once VENDOR.DS.'autoload.php';


new lib\system\Bootstrap($_REQUEST);
