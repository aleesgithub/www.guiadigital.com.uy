<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 22:00:33
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\login\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2165257aa35f2a71e63-39909037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c8b5d661468bc7d826f9eddeee130f98da333d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\login\\layout\\layout.tpl',
      1 => 1470765592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2165257aa35f2a71e63-39909037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa35f2aaaff3_40908156',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa35f2aaaff3_40908156')) {function content_57aa35f2aaaff3_40908156($_smarty_tpl) {?><div><?php echo $_smarty_tpl->getSubTemplate ('login/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="login_content"><?php echo $_smarty_tpl->getSubTemplate ("login/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="login_footer"><?php echo $_smarty_tpl->getSubTemplate ('login/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="fondologin"><img src="/img/inicio.jpg" alt="" width="50%"/></div>


<div class="login_mensaje"><?php echo $_smarty_tpl->getSubTemplate ('login/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div id="reloj" class="reloj"></div>
<div id="fecha" class="fecha"></div><?php }} ?>
