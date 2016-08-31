<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 19:18:42
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\login\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:515253d49e53bd9012-23027209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed4d4109b84970611fc280ea690233b5f9f0ee2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\login\\layout\\layout.tpl',
      1 => 1407968321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '515253d49e53bd9012-23027209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e53c3aaa1_40044730',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e53c3aaa1_40044730')) {function content_53d49e53c3aaa1_40044730($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('login/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="login_content"><?php echo $_smarty_tpl->getSubTemplate ("login/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('login/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="frontend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<!--<div class="login_divGeneral"></div>-->
<div class="login_footer_fondo"></div>
</body>
</html><?php }} ?>
