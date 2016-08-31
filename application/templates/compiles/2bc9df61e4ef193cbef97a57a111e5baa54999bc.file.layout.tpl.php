<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:25
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557453d49e26362934-61944834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc9df61e4ef193cbef97a57a111e5baa54999bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\layout\\layout.tpl',
      1 => 1408047310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557453d49e26362934-61944834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e263fed68_50068790',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e263fed68_50068790')) {function content_53d49e263fed68_50068790($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="backend_content"><?php echo $_smarty_tpl->getSubTemplate ("backend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div id="general" class="backend_divGeneral"></div>
<div id="fondomenu" class="backend_fondomenu"></div>
<div class="backend_footer_fondo"></div>
<div class="backend_graficas"></div>
</body>
</html>

<?php }} ?>
