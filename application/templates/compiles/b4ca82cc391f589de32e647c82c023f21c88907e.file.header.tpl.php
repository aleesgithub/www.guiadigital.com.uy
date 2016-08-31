<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 00:30:42
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\layout\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1668953c5ab9249e377-62012047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ca82cc391f589de32e647c82c023f21c88907e' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\layout\\header.tpl',
      1 => 1405451644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668953c5ab9249e377-62012047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'user_data' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5ab924fbf92_39824184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5ab924fbf92_39824184')) {function content_53c5ab924fbf92_39824184($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Backend de mi APP</title>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
<script src = "/js/functions.js"></script>
</head>
<body>
<div class="container" id="content">
<h1><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("ort");?>
</h1>
<div class="text-right small"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("user");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("last_session");?>
 <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value->lastLog,"m/d/Y H:i:s");?>
</strong> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("last_ip");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['user_data']->value->lastIp;?>
</strong> <a href="/login/logout/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("sign_out");?>
</a>
</div>
<ul class="nav nav-tabs">
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Categoria') {?> class="active"<?php }?>><a href="/categoria/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("categories");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='User') {?> class="active"<?php }?>><a href="/user/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("users");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Evento') {?> class="active"<?php }?>><a href="/evento/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("events");?>
</a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Producto') {?> class="active"<?php }?>><a href="/producto/"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("products");?>
</a></li>
</ul>
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
