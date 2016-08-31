<?php /* Smarty version Smarty-3.1.18, created on 2015-01-16 20:58:10
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\layout\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:510353f37967b9ca64-14289969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef661dfd9dc5a530631ee231af7353644c181ca2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\layout\\messages.tpl',
      1 => 1421438288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '510353f37967b9ca64-14289969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f37967bc1362_26513509',
  'variables' => 
  array (
    'msg' => 0,
    'alert_css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f37967bc1362_26513509')) {function content_53f37967bc1362_26513509($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['msg']->value[0]&&$_smarty_tpl->tpl_vars['msg']->value[1]) {?>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]=='error') {?>
		<?php $_smarty_tpl->tpl_vars["alert_css"] = new Smarty_variable("alert-danger", null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]=='success') {?>
		<?php $_smarty_tpl->tpl_vars["alert_css"] = new Smarty_variable("alert-success", null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]=='warning') {?>
		<?php $_smarty_tpl->tpl_vars["alert_css"] = new Smarty_variable("alert-warning", null, 0);?>
	<?php }?>	
	<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]=='info') {?>
		<?php $_smarty_tpl->tpl_vars["alert_css"] = new Smarty_variable("alert-info", null, 0);?>
	<?php }?>	
<div class="<?php echo $_smarty_tpl->tpl_vars['alert_css']->value;?>
"><img src="/img/<?php echo $_smarty_tpl->tpl_vars['msg']->value[0];?>
.png" width="25" height="25">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['msg']->value[1];?>
</div>	
<?php }?><?php }} ?>
