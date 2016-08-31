<?php /* Smarty version Smarty-3.1.18, created on 2014-08-11 23:41:32
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\login\layout\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47353d49e53c5dd32-21921461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af7fe791515939b2c57a0485f8e0bb8dc1e4ef38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\login\\layout\\header.tpl',
      1 => 1407811251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47353d49e53c5dd32-21921461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e53c61bb1_18546775',
  'variables' => 
  array (
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e53c61bb1_18546775')) {function content_53d49e53c61bb1_18546775($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("nombre_aplicacion"));?>
</title>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_general.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_frontend.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_login.css" />
<link rel="stylesheet" type="text/css" href="/css/ticketweb_backend.css" />
<script src = "/js/functions.js"></script>
<script src = "/js/edea.js"></script>
</head>

<body  class="cuerpo">
    
<div class="login_mensaje">
<?php echo $_smarty_tpl->getSubTemplate ('login/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--
<a href="http://www.ticketweb.com.uy:8181"><img src="/img/logo.png" title="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("nombre_aplicacion"));?>
" class="frontend_logo"/></a>
--><?php }} ?>
