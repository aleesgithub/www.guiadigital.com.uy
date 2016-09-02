<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:20:51
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1399857c5ce83b999e6-08555261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0997b01d6d9dcfba8cb8ee778f3d3559c2eef361' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\layout.tpl',
      1 => 1470154422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1399857c5ce83b999e6-08555261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jquery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5ce83bc2614_94105409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce83bc2614_94105409')) {function content_57c5ce83bc2614_94105409($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="contenido" class="content">
<?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("frontend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("frontend/layout/titles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
<div class="backend_cuerpo"></div>
<div id="flotante">

</div>
<div id="usermenu" class="usermenu"><?php echo $_smarty_tpl->getSubTemplate ("backend/layout/usermenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div id="reloj" class="reloj"></div>
<div id="fecha" class="fecha"></div>
<div  class="logo"><span><label id="gui">Gu&iacute;a<label id="di">Digital</span></div>
</span>
</body>
</html><?php }?>

<?php }} ?>
