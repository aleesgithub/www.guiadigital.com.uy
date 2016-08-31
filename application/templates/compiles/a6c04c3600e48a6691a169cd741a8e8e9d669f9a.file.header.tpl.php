<?php /* Smarty version Smarty-3.1.18, created on 2014-07-27 04:34:52
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\layout\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:915953bc7808e7be20-87211739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c04c3600e48a6691a169cd741a8e8e9d669f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\layout\\header.tpl',
      1 => 1406428481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '915953bc7808e7be20-87211739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc7808eb8d27_42646804',
  'variables' => 
  array (
    'Tr' => 0,
    'user_data' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc7808eb8d27_42646804')) {function content_53bc7808eb8d27_42646804($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Backend de mi APP</title>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/css/estilos.css" />
<script src = "/js/functions.js"></script>
<script src = "/js/edea.js"></script>
</head>
    <body  class="cuerpo">
<div class="container" id="content">
<h1><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("ort");?>
</h1>
<div class="infousu"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("user");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("last_session");?>
 <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value->lastLog,"m/d/Y H:i:s");?>
</strong> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("last_ip");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['user_data']->value->lastIp;?>
 <a href="/login/logout/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("sign_out");?>
</a></strong>
</div>
<div class="headerF">
<ul class="nav nav-tabs">
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Categoria') {?> class="active"<?php }?>><a href="/categoria/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("categories");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='User') {?> class="active"<?php }?>><a href="/user/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("users");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Evento') {?> class="active"<?php }?>><a href="/evento/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("events");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Producto') {?> class="active"<?php }?>><a href="/producto/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("products");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Espectaculo') {?> class="active"<?php }?>><a href="/espectaculo/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("shows");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Lugar') {?> class="active"<?php }?>><a href="/lugar/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("places");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Sector') {?> class="active"<?php }?>><a href="/sector/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("sector");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Lugarsector') {?> class="active"<?php }?>><a href="/lugarsector/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("places and sectors");?>
</a></li>
  
</ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
