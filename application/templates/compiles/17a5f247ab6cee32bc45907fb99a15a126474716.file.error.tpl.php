<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 01:00:25
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3100553bc78090a7429-68845942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a5f247ab6cee32bc45907fb99a15a126474716' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\layout\\error.tpl',
      1 => 1402439884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3100553bc78090a7429-68845942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc78090e4326_18003193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc78090e4326_18003193')) {function content_53bc78090e4326_18003193($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:marcelo.caiafa@yahoo.com">Contacte al administrador del sistema</a><?php }} ?>
