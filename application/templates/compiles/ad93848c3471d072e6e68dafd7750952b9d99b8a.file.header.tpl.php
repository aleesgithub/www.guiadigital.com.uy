<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:25
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\layout\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1882353d49e264319e9-19457422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad93848c3471d072e6e68dafd7750952b9d99b8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\layout\\header.tpl',
      1 => 1407970522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1882353d49e264319e9-19457422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e26500a97_98809320',
  'variables' => 
  array (
    'Tr' => 0,
    'js' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e26500a97_98809320')) {function content_53d49e26500a97_98809320($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("nombre_aplicacion"));?>
</title>

<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/css/estilos.css" />
<link type="text/css" rel="stylesheet" href="/css/jscal2.css" />
<link type="text/css" rel="stylesheet" href="/css/border-radius.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_general.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_login.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_backend.css" />

<script type='text/javascript' src='/js/jquery-1.4.2.min.js'></script>
<script src="/js/jscal2.js"></script>
<script src="/js/unicode-letter.js"></script>
<script src="/js/es.js"></script>
<script src = "/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
.js"></script>
<script src="/js/functions.js"></script>

</head>

<body  class="backend_cuerpo">

<div class="backend_mensaje">
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="backend_search">
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>    
    
<div class="backend_header" align="right">
<ul class="nav nav-tabs">
<li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Categoria') {?> class="active"<?php }?>><a href="/categoria/"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("categorias"));?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Espectaculo') {?> class="active"<?php }?>><a href="/espectaculo/"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("espectaculos"));?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Evento') {?> class="active"<?php }?>><a href="/evento/"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eventos"));?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Lugar') {?> class="active"<?php }?>><a href="/lugar/"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("lugares"));?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Sector') {?> class="active"<?php }?>><a href="/sector/"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("sectores"));?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Ticket') {?> class="active"<?php }?>><a href="/ticket/"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("tickets"));?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Report') {?> class="active"<?php }?>><a href="/report/"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("reportes"));?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='User') {?> class="active"<?php }?>><a href="/user/"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("usuarios"));?>
</a></li>
</ul>
</div>
<?php }} ?>
