<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:21:07
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\frontend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2391553f379738fbfd0-08547063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '865ed5c8174026d093a1e7b659e29286452f8808' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\frontend\\layout\\layout.tpl',
      1 => 1407959954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2391553f379738fbfd0-08547063',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f3797392f225_39012440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f3797392f225_39012440')) {function content_53f3797392f225_39012440($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="frontend_content"><?php echo $_smarty_tpl->getSubTemplate ("frontend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="frontend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="frontend_divGeneral"></div>
<div id="fondomenu" class="frontend_fondomenu"></div>
<div class="frontend_footer_fondo"></div>
</body>
</html><?php }} ?>
