<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:21:18
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\login\layout\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1251253f3797eb697c9-24032717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25b6ee23e5496f675c7a39f29e22aa592fcde184' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\login\\layout\\messages.tpl',
      1 => 1406824510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1251253f3797eb697c9-24032717',
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
  'unifunc' => 'content_53f3797eb92197_64179891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f3797eb92197_64179891')) {function content_53f3797eb92197_64179891($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['msg']->value[0]&&$_smarty_tpl->tpl_vars['msg']->value[1]) {?>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]=='error') {?>
		<?php $_smarty_tpl->tpl_vars["alert_css"] = new Smarty_variable("alert alert-danger", null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]=='success') {?>
		<?php $_smarty_tpl->tpl_vars["alert_css"] = new Smarty_variable("alert alert-success", null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]=='warning') {?>
		<?php $_smarty_tpl->tpl_vars["alert_css"] = new Smarty_variable("alert alert-warning", null, 0);?>
	<?php }?>	
	<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]=='info') {?>
		<?php $_smarty_tpl->tpl_vars["alert_css"] = new Smarty_variable("alert alert-info", null, 0);?>
	<?php }?>	
	<div class="<?php echo $_smarty_tpl->tpl_vars['alert_css']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['msg']->value[1];?>
</div>		
<?php }?><?php }} ?>