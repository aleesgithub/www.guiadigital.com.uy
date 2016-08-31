<?php /* Smarty version Smarty-3.1.18, created on 2016-08-27 01:10:28
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\login\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:611655d61aa9790a95-77050600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c8b5d661468bc7d826f9eddeee130f98da333d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\login\\layout\\layout.tpl',
      1 => 1472252940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '611655d61aa9790a95-77050600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61aa97c3e67_59050407',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61aa97c3e67_59050407')) {function content_55d61aa97c3e67_59050407($_smarty_tpl) {?><!-- Cabezal -->
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>

    <div class="container-fluid well" id="container-body">
        <div class="row">
    
            <!-- Menú -->
            <?php echo $_smarty_tpl->getSubTemplate ('login/layout/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Contenido -->
            <?php echo $_smarty_tpl->getSubTemplate ("login/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Footer -->
            <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <!-- Librerías -->
            <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/librerias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            
        </div>
    </div>
</body><?php }} ?>
