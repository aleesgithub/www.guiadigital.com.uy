<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 00:39:59
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\login\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1169053c5adbf0f8047-90967847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f67ebcf7201d4197705748d71a422fe481e0a01' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\login\\layout\\layout.tpl',
      1 => 1404074586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169053c5adbf0f8047-90967847',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5adbf146251_87246460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5adbf146251_87246460')) {function content_53c5adbf146251_87246460($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('login/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("login/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('login/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
