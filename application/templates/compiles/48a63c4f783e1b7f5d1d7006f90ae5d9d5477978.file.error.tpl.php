<?php /* Smarty version Smarty-3.1.18, created on 2014-09-09 04:27:41
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\login\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14549540e659d0d9b94-83643168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a63c4f783e1b7f5d1d7006f90ae5d9d5477978' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\login\\layout\\error.tpl',
      1 => 1410229651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14549540e659d0d9b94-83643168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_540e659d13f605_47911560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540e659d13f605_47911560')) {function content_540e659d13f605_47911560($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:admin@ticketweb.com.uy">Contacte al administrador del sistema</a><?php }} ?>
