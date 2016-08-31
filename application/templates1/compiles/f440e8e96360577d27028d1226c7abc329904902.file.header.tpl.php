<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 23:25:27
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:478757aa4a47340f60-59125609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f440e8e96360577d27028d1226c7abc329904902' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\header.tpl',
      1 => 1470765551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '478757aa4a47340f60-59125609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'css' => 0,
    'js' => 0,
    'user_data' => 0,
    'mailrec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa4a4736b790_21463343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa4a4736b790_21463343')) {function content_57aa4a4736b790_21463343($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("nombre_aplicacion"));?>
</title>
<link rel="stylesheet" type="text/css" href="/css/backend.css" />
<!--<link rel="stylesheet" type="text/css" href="/css/formularios.css" />-->
<link rel="stylesheet" type="text/css" href="/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='/js/jquery-1.4.2.min.js'></script>
<script src="/js/unicode-letter.js"></script>
<script src="/js/es.js"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=3&amp;sensor=false&amp;key=AIzaSyDWD08m2rubm2lSiEdfQb0szx806bLVhX8" type="text/javascript"></script>  
<script src="/js/functions.js"></script>
<script src="/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
.js"></script>
<link rel="stylesheet" href="/js/jquery-ui-1.11.1.custom/jquery-ui.css">
<script src="/js/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
<link rel="stylesheet" href="/js/jquery-ui-1.11.1.custom/style.css">
 <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true'></script>
<script type='text/javascript'  src='http://code.google.com/apis/gears/gears_init.js'></script>   

<style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; z-index: 12}
  #resizable h3 { text-align: center; margin: 0; }
</style>











</head>

<body  class="backend" onLoad="Start()">
    
<div id='msg' class='msg'>

<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>



<div id="main">

<ul class="navigationMenu">
    <li id="home">
        <a class="home" href="/index/"><br><img src="/img/home.png" >
            <span>Inicio</span>
        </a>
        
    </li>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
    <li>
        <a class="about" ><br><img src="/img/user.png" onclick="location.href='/user/'" >
            <span>User</span>
        </a>
    </li>
    <!--
    <li>
	     <a class="services"><br><img src="/img/reporte.png" >
            <span>Reporte</span>
         </a>
    </li>
    -->
    <li>
    	<a class="portfolio" ><br><img src="/img/herramientas.png"  onclick="location.href='/empresa/'">
            <span>Empresa</span>
        </a>
    </li>
    
    <li>
    	<a class="contact"><br><img src="/img/mail.png" onclick="location.href='/mail/'">
                    <span>Contacto</span>
                    <div id="notify" class="notify" style="display: none"><?php echo $_smarty_tpl->tpl_vars['mailrec']->value;?>
</div>
        </a>
    </li>
        <?php }?>
</ul>
    
</div>
    





<?php }} ?>
