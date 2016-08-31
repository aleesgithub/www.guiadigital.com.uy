<?php /* Smarty version Smarty-3.1.18, created on 2016-08-27 01:10:28
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1981955e5fe79088f91-16541315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '119e73b654f56d8bc3081bdb64d1bef7772487d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\messages.tpl',
      1 => 1472252438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1981955e5fe79088f91-16541315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e5fe790afd68_60076914',
  'variables' => 
  array (
    'msg' => 0,
    'alert_css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e5fe790afd68_60076914')) {function content_55e5fe790afd68_60076914($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]&&$_smarty_tpl->tpl_vars['msg']->value[1]) {?>
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
