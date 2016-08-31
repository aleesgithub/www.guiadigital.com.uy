<?php /* Smarty version Smarty-3.1.18, created on 2014-07-27 08:38:17
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\login\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2106853d49e59562007-86495409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1ce2bad7ab346cd95e99066f39aa00d674244aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\login\\layout\\error.tpl',
      1 => 1402439884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2106853d49e59562007-86495409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e595bbd96_48092520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e595bbd96_48092520')) {function content_53d49e595bbd96_48092520($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:marcelo.caiafa@yahoo.com">Contacte al administrador del sistema</a><?php }} ?>
