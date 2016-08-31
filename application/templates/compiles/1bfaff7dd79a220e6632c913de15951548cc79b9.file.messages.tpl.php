<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 22:45:28
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1175755d61aa8e7bbe6-71641233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bfaff7dd79a220e6632c913de15951548cc79b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\messages.tpl',
      1 => 1471985127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175755d61aa8e7bbe6-71641233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61aa8e9ffc1_72745985',
  'variables' => 
  array (
    'msg' => 0,
    'alert_css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61aa8e9ffc1_72745985')) {function content_55d61aa8e9ffc1_72745985($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['msg']->value[0]&&$_smarty_tpl->tpl_vars['msg']->value[1]) {?>
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
