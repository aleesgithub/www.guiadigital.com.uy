<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:21:19
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\login\layout\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2157257c5ce9f0439a7-87102851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f28060ceb7260f09cc8e8e12243c3acb4a20043a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\login\\layout\\messages.tpl',
      1 => 1406824510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2157257c5ce9f0439a7-87102851',
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
  'unifunc' => 'content_57c5ce9f0553b3_98479954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce9f0553b3_98479954')) {function content_57c5ce9f0553b3_98479954($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['msg']->value[0]&&$_smarty_tpl->tpl_vars['msg']->value[1]) {?>
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
