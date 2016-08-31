<?php /* Smarty version Smarty-3.1.18, created on 2016-08-27 01:12:03
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:695857ab3a7f474b06-22908650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac64b365528745ba14fecd719aef5290e9eabcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\menu.tpl',
      1 => 1472253122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '695857ab3a7f474b06-22908650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57ab3a7f4c0dc0_14722446',
  'variables' => 
  array (
    'user_data' => 0,
    'mailrec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3a7f4c0dc0_14722446')) {function content_57ab3a7f4c0dc0_14722446($_smarty_tpl) {?><nav class="navbar navbar-default" id="nav-menu">
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

        <!-- Menú desplegable -->
        <div class="collapse navbar-collapse" id="menu-nav">

            <!-- Lista del menú -->
            <ul class="nav navbar-nav navbar">

                <!-- Inicio -->
                <li>
                    <a  href="/index/index" id="a-link-menu"><i class="fa fa-home fa-1x" id="icono-menu"></i> <os-p >Inicio</os-p> </a>
                </li>
                
                <!-- Servicios -->
                <li>
                    <a  href="/index/servicios" id="a-link-menu"><i class="fa fa-list fa-1x" id="icono-menu"></i> <os-p >Servicios</os-p> </a>
                </li>

                <!-- Menú administrador -->
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
                    <li>
                        <a href="/user/" id="a-link-menu"> <i class="fa fa-user fa-1x" id="icono-menu"></i> <os-p >Usuarios</os-p> </a>
                   </li>
                   <li>
                       <a href="/empresa/" id="a-link-menu"> <i class="fa fa-building fa-1x" id="icono-menu"></i> <os-p >Empresas</os-p> </a>
                   </li>
               <?php }?>

                <!-- Contacto si el usuario NO es administrador-->
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role!='ADM') {?>
                    <li>
                        <a href="/contacto/"  id="a-link-menu"><i class="fa fa-envelope fa-1x" id="icono-menu"></i><os-p > Contacto</os-p></a><div id="notify" class="notify" style="display: none"><?php echo $_smarty_tpl->tpl_vars['mailrec']->value;?>
</div>
                    </li>
               <?php }?>
            </ul>   
            
            <!-- Menú de usuario -->    
            <ul class="nav navbar-nav navbar-right">
                
                <!-- Errores -->
                <li id="cuadro-errores">
                    <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </li>
                
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value->usr) {?>
                    <li>
                        <a href="/login/logout" id="a-link-logueado"><img id="img_usuario_menu" src="/img/usuarios/<?php echo $_smarty_tpl->tpl_vars['user_data']->value->imagen;?>
" class="img-rounded"><span> Cerrar sesión </span></a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="/login/" id="a-link-login"> Iniciar sesi&oacute;n </a>
                    </li>
                <?php }?>
            </ul>           
        </div>
    </div>
</nav><?php }} ?>
