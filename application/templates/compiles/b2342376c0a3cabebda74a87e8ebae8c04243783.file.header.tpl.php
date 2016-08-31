<?php /* Smarty version Smarty-3.1.18, created on 2015-04-08 16:12:18
         compiled from "/srv/www/htdocs/sysav_v3/application/templates/backend/layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189922566955102d53d527a8-28751406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2342376c0a3cabebda74a87e8ebae8c04243783' => 
    array (
      0 => '/srv/www/htdocs/sysav_v3/application/templates/backend/layout/header.tpl',
      1 => 1428417904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189922566955102d53d527a8-28751406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55102d53d5d503_85832282',
  'variables' => 
  array (
    'Tr' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55102d53d5d503_85832282')) {function content_55102d53d5d503_85832282($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/srv/www/htdocs/sysav_v3/vendor/smarty/libs/plugins/modifier.capitalize.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("nombre_aplicacion"));?>
</title>
<link rel="stylesheet" type="text/css" href="/css/backend.css" />
<link rel="stylesheet" type="text/css" href="/css/formularios.css" />
<script type='text/javascript' src='/js/jquery-1.4.2.min.js'></script>
<!--<script src="/js/jscal2.js"></script>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />-->

<script src="/js/unicode-letter.js"></script>
<script src="/js/es.js"></script>

<script src="/js/functions.js"></script>
<script src="/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
.js"></script>

<link rel="stylesheet" href="/js/jquery-ui-1.11.1.custom/jquery-ui.css">
<script src="/js/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
<link rel="stylesheet" href="/js/jquery-ui-1.11.1.custom/style.css">
<link rel="stylesheet" href="/js/jquery-ui-1.11.1.custom/themes/smoothness/jquery-ui.css">


  
<style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; z-index: 12}
  #resizable h3 { text-align: center; margin: 0; }
</style>

 





</head>

<body  class="backend" onLoad="Start()">
<div id='msg' class='msg'>
<!--<div id="resizable" class="ui-widget-content">

  <h3 class="ui-widget-header">Resizable</h3>
<p>Date: <input type="text" id="datepicker"></p>
</div>-->
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>



<div id="main">

<ul class="navigationMenu">
    <li id="home">
        <a class="home" href="/index/"><br><img src="/img/home.png" >
            <span>Inicio</span>
        </a>
        
    </li>
    
    <li>
        <a class="about" ><br><img src="/img/user.png" onclick="cargarUser()" >
            <span>User</span>
        </a>
    </li>
    
    <li>
	     <a class="services"><br><img src="/img/reporte.png" >
            <span>Reporte</span>
         </a>
    </li>
    
    <li>
    	<a class="portfolio" ><br><img src="/img/herramientas.png"  onclick="location.href='/proyecto/'">
            <span>Proyectos</span>
        </a>
    </li>
    
    <li>
    	<a class="contact" href="#"><br><img src="/img/mail.png" >
            <span>Contacto</span>
        </a>
    </li>
</ul>
    
</div>
    





<?php }} ?>
