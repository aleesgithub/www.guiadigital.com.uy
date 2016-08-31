<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:20:55
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243753f37967bea701-19194432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c50edec652f48d3a146326667fc7e4046966c76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\layout\\error.tpl',
      1 => 1408044428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243753f37967bea701-19194432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f37967bee564_74468489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f37967bee564_74468489')) {function content_53f37967bee564_74468489($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:admin@ticketweb.com.uy">Contacte al administrador del sistema</a><?php }} ?>
