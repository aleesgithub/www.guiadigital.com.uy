<?php /* Smarty version Smarty-3.1.18, created on 2014-07-26 15:14:57
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2893453bc7808e02029-24094520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a3a5addc14f1dad98b524fd47f9c6c79510c2e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\layout\\layout.tpl',
      1 => 1406119680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2893453bc7808e02029-24094520',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc7808e3ef25_33166251',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc7808e3ef25_33166251')) {function content_53bc7808e3ef25_33166251($_smarty_tpl) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="contentF"><?php echo $_smarty_tpl->getSubTemplate ("backend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
   <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
    <div class="divGeneral"></div><?php }} ?>
