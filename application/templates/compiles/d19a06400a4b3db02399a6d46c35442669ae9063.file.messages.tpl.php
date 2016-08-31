<?php /* Smarty version Smarty-3.1.18, created on 2015-04-07 18:52:16
         compiled from "/srv/www/sysav_v3/application/templates/backend/layout/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38569303755242760e9d460-25109661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd19a06400a4b3db02399a6d46c35442669ae9063' => 
    array (
      0 => '/srv/www/sysav_v3/application/templates/backend/layout/messages.tpl',
      1 => 1428417904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38569303755242760e9d460-25109661',
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
  'unifunc' => 'content_55242760ebeb12_91003339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55242760ebeb12_91003339')) {function content_55242760ebeb12_91003339($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['msg']->value[0]&&$_smarty_tpl->tpl_vars['msg']->value[1]) {?>
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
