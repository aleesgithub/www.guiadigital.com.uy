<?php /* Smarty version Smarty-3.1.18, created on 2016-08-27 00:53:25
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2628455e5f16a610583-70596378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0997b01d6d9dcfba8cb8ee778f3d3559c2eef361' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\layout.tpl',
      1 => 1472249925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2628455e5f16a610583-70596378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e5f16a662e82_81696920',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e5f16a662e82_81696920')) {function content_55e5f16a662e82_81696920($_smarty_tpl) {?><!-- Cabezal -->
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>

    <div class="container-fluid well" id="container-body">
        <div class="row">
    
            <!-- Menú -->
            <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Contenido -->
            <?php echo $_smarty_tpl->getSubTemplate ("frontend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Footer -->
            <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Librerías -->
            <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/librerias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            
        </div>
    </div>
</body><?php }} ?>
