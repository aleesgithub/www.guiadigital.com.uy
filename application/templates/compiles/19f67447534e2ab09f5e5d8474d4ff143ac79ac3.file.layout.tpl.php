<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:20:51
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2022457c5ce83ef3715-95042130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f67447534e2ab09f5e5d8474d4ff143ac79ac3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\layout.tpl',
      1 => 1442271097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2022457c5ce83ef3715-95042130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jquery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5ce83f20bf2_25298388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce83f20bf2_25298388')) {function content_57c5ce83f20bf2_25298388($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="contenido" class="content">
<?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("backend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("backend/layout/titles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
<div class="backend_cuerpo"></div>
<div id="flotante">

</div>
<div id="usermenu" class="usermenu"><?php echo $_smarty_tpl->getSubTemplate ("backend/layout/usermenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div id="reloj" class="reloj"></div>
<div id="fecha" class="fecha"></div>
<div  class="logo"><span><label id="gui">Gu&iacute;as<label id="di">&nbsp;Digital</span></div>

</body>

</html><?php }?>

<?php }} ?>
