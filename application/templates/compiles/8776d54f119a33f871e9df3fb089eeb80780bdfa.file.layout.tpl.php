<?php /* Smarty version Smarty-3.1.18, created on 2015-04-08 16:12:18
         compiled from "/srv/www/htdocs/sysav_v3/application/templates/backend/layout/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108666246255102d53d04668-12210085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8776d54f119a33f871e9df3fb089eeb80780bdfa' => 
    array (
      0 => '/srv/www/htdocs/sysav_v3/application/templates/backend/layout/layout.tpl',
      1 => 1428417904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108666246255102d53d04668-12210085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55102d53d34153_86106801',
  'variables' => 
  array (
    'jquery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55102d53d34153_86106801')) {function content_55102d53d34153_86106801($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
