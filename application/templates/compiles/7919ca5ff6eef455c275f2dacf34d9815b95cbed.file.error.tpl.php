<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 00:39:59
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3125353c5adbf685f97-26661793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7919ca5ff6eef455c275f2dacf34d9815b95cbed' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\layout\\error.tpl',
      1 => 1402439884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3125353c5adbf685f97-26661793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5adbf6d0327_07561853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5adbf6d0327_07561853')) {function content_53c5adbf6d0327_07561853($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:marcelo.caiafa@yahoo.com">Contacte al administrador del sistema</a><?php }} ?>
