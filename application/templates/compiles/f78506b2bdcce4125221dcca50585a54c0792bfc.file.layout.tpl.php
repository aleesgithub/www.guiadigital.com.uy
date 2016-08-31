<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 01:21:28
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\login\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3187853bc7cf8638598-68692769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f78506b2bdcce4125221dcca50585a54c0792bfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\login\\layout\\layout.tpl',
      1 => 1404074586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3187853bc7cf8638598-68692769',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc7cf86b23a2_35959447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc7cf86b23a2_35959447')) {function content_53bc7cf86b23a2_35959447($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('login/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("login/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('login/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
