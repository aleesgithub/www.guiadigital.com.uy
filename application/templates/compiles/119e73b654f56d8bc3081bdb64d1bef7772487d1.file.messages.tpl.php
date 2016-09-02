<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:20:51
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1225257c5ce83c03694-77232038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '119e73b654f56d8bc3081bdb64d1bef7772487d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\messages.tpl',
      1 => 1441132861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225257c5ce83c03694-77232038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'alert_css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5ce83c15939_33563819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce83c15939_33563819')) {function content_57c5ce83c15939_33563819($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['msg']->value[0]&&$_smarty_tpl->tpl_vars['msg']->value[1]) {?>
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
