<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:21:07
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\frontend\layout\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:429653f37973943cc6-55283531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b97d4757bc6603dfdc7d710bcd21671d076a49d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\frontend\\layout\\header.tpl',
      1 => 1408465098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '429653f37973943cc6-55283531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'js' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f37973971c68_63659389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f37973971c68_63659389')) {function content_53f37973971c68_63659389($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("nombre_aplicacion"));?>
</title>

<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/css/estilos.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_general.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_frontend.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_login.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_backend.css" />

<script type='text/javascript' src='/js/jquery-1.4.2.min.js'></script>
<script src = "/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
.js"></script>
<script src = "/js/functions.js"></script>

</head>

<body  class="frontend_cuerpo">

<div class="frontend_mensaje">
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<!--
<div  class="frontend_idioma">
    <a href="http://www.ticketweb.com.uy:8181/index/index/?language=es"><img src="/img/idioma_es.png" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("espanol");?>
" width="20" height="20"/> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("espanol");?>
</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.ticketweb.com.uy:8181/index/index/?language=en"><img src="/img/idioma_en.png" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("ingles");?>
" width="20" height="20"/> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("ingles");?>
</a>
</div>
-->

<!--
<a href="http://www.ticketweb.com.uy:8181"><img src="/img/logo.png" title="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("nombre_aplicacion"));?>
" class="frontend_logo"/></a>
-->

<div class="frontend_search">
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="frontend_mensaje">
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>



<div class="frontend_header">
<ul class="nav nav-tabs">
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Categoria') {?> class="active"<?php }?>><a href="/categoria/listado"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("categories");?>
</a></li>
  
</ul>
</div>
<?php }} ?>
