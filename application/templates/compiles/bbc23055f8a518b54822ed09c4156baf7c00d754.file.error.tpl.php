<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 22:45:29
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2888255d61b88a33975-01519000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc23055f8a518b54822ed09c4156baf7c00d754' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\error.tpl',
      1 => 1471985067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2888255d61b88a33975-01519000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61b88a62134_08975459',
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61b88a62134_08975459')) {function content_55d61b88a62134_08975459($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:admin@ticketweb.com.uy">Contacte al administrador del sistema</a><?php }} ?>
