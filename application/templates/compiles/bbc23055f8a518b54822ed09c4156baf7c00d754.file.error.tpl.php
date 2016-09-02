<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:20:52
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73557c5ce84024028-59920066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc23055f8a518b54822ed09c4156baf7c00d754' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\error.tpl',
      1 => 1408044428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73557c5ce84024028-59920066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5ce84025fa4_70783375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce84025fa4_70783375')) {function content_57c5ce84025fa4_70783375($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:admin@ticketweb.com.uy">Contacte al administrador del sistema</a><?php }} ?>
