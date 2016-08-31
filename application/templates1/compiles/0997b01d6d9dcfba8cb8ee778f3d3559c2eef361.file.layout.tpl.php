<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 22:07:23
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1926157aa35fa099042-81285382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0997b01d6d9dcfba8cb8ee778f3d3559c2eef361' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\layout.tpl',
      1 => 1470773241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1926157aa35fa099042-81285382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa35fa0f8d43_48740422',
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa35fa0f8d43_48740422')) {function content_57aa35fa0f8d43_48740422($_smarty_tpl) {?><!-- Cabezal -->
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value->usr) {?>
        <!-- Menú -->
        <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- Buscador -->
        <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/buscador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- Contenido -->
        <?php echo $_smarty_tpl->getSubTemplate ("frontend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <!-- Menú -->
        <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <!-- Footer -->
    <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!-- Librerías -->
    <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/librerias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
