<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 01:21:49
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\login\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2331453bc7d0d6e5ee0-36756078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f50f1d0dd2000373e3d5da69879631b7b04f24a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\login\\layout\\error.tpl',
      1 => 1402439884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2331453bc7d0d6e5ee0-36756078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc7d0d722de7_88026811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc7d0d722de7_88026811')) {function content_53bc7d0d722de7_88026811($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:marcelo.caiafa@yahoo.com">Contacte al administrador del sistema</a><?php }} ?>
