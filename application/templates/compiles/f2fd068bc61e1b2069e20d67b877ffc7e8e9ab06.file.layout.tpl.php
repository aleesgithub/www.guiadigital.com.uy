<?php /* Smarty version Smarty-3.1.18, created on 2015-01-14 15:07:28
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\login\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2638653f3797eae30e9-14763978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2fd068bc61e1b2069e20d67b877ffc7e8e9ab06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\login\\layout\\layout.tpl',
      1 => 1421244444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2638653f3797eae30e9-14763978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f3797eb17f94_48962014',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f3797eb17f94_48962014')) {function content_53f3797eb17f94_48962014($_smarty_tpl) {?><div><?php echo $_smarty_tpl->getSubTemplate ('login/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="login_content"><?php echo $_smarty_tpl->getSubTemplate ("login/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="login_footer"><?php echo $_smarty_tpl->getSubTemplate ('login/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="fondologin"></div>
<div class="logosecom"><img src="/img/logosecom.png" alt="" width="20%" height="20%"/></div>
<div class="logo"><img src="/img/logosysav.png" alt="" width="30%" height="30%"/></div>
<div class="login_mensaje"><?php echo $_smarty_tpl->getSubTemplate ('login/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div id="reloj" class="reloj"></div>
<div id="fecha" class="fecha"></div><?php }} ?>
