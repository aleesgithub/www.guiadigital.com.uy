<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:26
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\layout\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2991753d49e265d39d3-85931794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18627d8ce16bee31415b75ff512a60b64934a898' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\layout\\error.tpl',
      1 => 1408044428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2991753d49e265d39d3-85931794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e265db6d4_64970973',
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e265db6d4_64970973')) {function content_53d49e265db6d4_64970973($_smarty_tpl) {?><h2>Parece que hubo un error...</h2>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</div>
<p><a href="mailto:admin@ticketweb.com.uy">Contacte al administrador del sistema</a><?php }} ?>
