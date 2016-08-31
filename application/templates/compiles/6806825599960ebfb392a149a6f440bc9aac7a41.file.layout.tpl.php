<?php /* Smarty version Smarty-3.1.18, created on 2015-08-13 20:38:23
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:660153f37967a41189-61652890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6806825599960ebfb392a149a6f440bc9aac7a41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\layout\\layout.tpl',
      1 => 1439491099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '660153f37967a41189-61652890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f37967a73c89_29542048',
  'variables' => 
  array (
    'jquery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f37967a73c89_29542048')) {function content_53f37967a73c89_29542048($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="contenido" class="content">
<?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("backend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['jquery']->value==false) {?> </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("backend/layout/titles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
<div class="backend_cuerpo"></div>
<div id="flotante">

</div>
<div id="reloj" class="reloj"></div>
<div id="fecha" class="fecha"></div>
<div id="logo" class="logo"><img src="/img/logosysav.png" width="50%" height="50%"></div>
<div id="logo" class="logosecom"><img src="/img/logosecom.png" width="160" height="50"></div>
</body>
</html><?php }?>

<?php }} ?>
