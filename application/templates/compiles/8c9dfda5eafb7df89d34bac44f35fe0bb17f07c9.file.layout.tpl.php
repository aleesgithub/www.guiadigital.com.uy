<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 03:16:07
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\frontend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1764853c5d257577b87-78755881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9dfda5eafb7df89d34bac44f35fe0bb17f07c9' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\frontend\\layout\\layout.tpl',
      1 => 1402439884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1764853c5d257577b87-78755881',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5d257627830_49359199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5d257627830_49359199')) {function content_53c5d257627830_49359199($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("frontend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
