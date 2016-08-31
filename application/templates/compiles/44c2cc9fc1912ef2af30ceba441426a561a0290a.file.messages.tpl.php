<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:25
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\layout\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:837253d49e26527ba0-12356253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c2cc9fc1912ef2af30ceba441426a561a0290a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\layout\\messages.tpl',
      1 => 1407798974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '837253d49e26527ba0-12356253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e265b45c5_89435817',
  'variables' => 
  array (
    'msg' => 0,
    'alert_css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e265b45c5_89435817')) {function content_53d49e265b45c5_89435817($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['msg']->value[0]&&$_smarty_tpl->tpl_vars['msg']->value[1]) {?>
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
	<div class="msg"><div class="<?php echo $_smarty_tpl->tpl_vars['alert_css']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['msg']->value[1];?>
</div></div>		
<?php }?><?php }} ?>
