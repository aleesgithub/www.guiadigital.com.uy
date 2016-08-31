<?php /* Smarty version Smarty-3.1.18, created on 2015-04-07 18:52:16
         compiled from "/srv/www/sysav_v3/application/templates/backend/layout/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151776033855242760e2a543-21664322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f4d532af425903995cc6f0205b4144cbd626c4' => 
    array (
      0 => '/srv/www/sysav_v3/application/templates/backend/layout/layout.tpl',
      1 => 1428417904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151776033855242760e2a543-21664322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jquery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55242760e806c3_39510737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55242760e806c3_39510737')) {function content_55242760e806c3_39510737($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="contenido" class="content">
<?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("backend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("backend/layout/titles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
<div class="backend_cuerpo"></div>
<div id="reloj" class="reloj"></div>
<div id="fecha" class="fecha"></div>
<div id="logo" class="logo"><img src="/img/logosysav.png" width="50%" height="50%"></div>
<div id="logo" class="logosecom"><img src="/img/logosecom.png" width="160" height="50"></div>
</body>
</html><?php }?>

<?php }} ?>
