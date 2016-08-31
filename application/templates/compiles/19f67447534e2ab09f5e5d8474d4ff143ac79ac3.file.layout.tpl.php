<?php /* Smarty version Smarty-3.1.18, created on 2016-08-27 00:58:02
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3074355d61aa8e072b3-13550343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f67447534e2ab09f5e5d8474d4ff143ac79ac3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\layout.tpl',
      1 => 1472252271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3074355d61aa8e072b3-13550343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61aa8e42091_03980095',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61aa8e42091_03980095')) {function content_55d61aa8e42091_03980095($_smarty_tpl) {?><!-- Cabezal -->
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>

    <div class="container-fluid well" id="container-body">
        <div class="row">
    
            <!-- Menú -->
            <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Contenido -->
            <?php echo $_smarty_tpl->getSubTemplate ("backend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Footer -->
            <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Librerías -->
            <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/librerias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            
        </div>
    </div>
</body><?php }} ?>
