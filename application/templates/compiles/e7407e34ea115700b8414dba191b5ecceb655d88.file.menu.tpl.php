<?php /* Smarty version Smarty-3.1.18, created on 2016-08-27 01:10:28
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\login\layout\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1740557ab91716022b0-77731933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7407e34ea115700b8414dba191b5ecceb655d88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\login\\layout\\menu.tpl',
      1 => 1472253026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1740557ab91716022b0-77731933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57ab91716038f2_50078705',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab91716038f2_50078705')) {function content_57ab91716038f2_50078705($_smarty_tpl) {?><nav class="navbar navbar-default" id="nav-menu">
    <div class="container-fluid">
        
        <!-- Logo, nombre y menú contraído -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-nav">
                    <span class="sr-only">Men&uacute; de navegaci&oacute;n</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a href="/index/index" id="a-link-menu"><img src="/img/sistema/apple-touch-icon-57x57.png" id="imagen-logo"></a>
        </div>
        <div class="navbar-header">
            <Label id="label-titulo">Gu&iacute;a Digital</Label>
        </div>
         <!-- Menú de usuario -->    
            <ul class="nav navbar-nav navbar-right">
                
                <!-- Errores -->
                <li id="cuadro-errores">
                    <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </li>
            </ul>
    </div>
</nav><?php }} ?>
