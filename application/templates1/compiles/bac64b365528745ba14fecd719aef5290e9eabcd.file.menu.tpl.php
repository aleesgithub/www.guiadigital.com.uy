<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 23:25:26
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2817857aa4a46cd9681-09899214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac64b365528745ba14fecd719aef5290e9eabcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\menu.tpl',
      1 => 1470775643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817857aa4a46cd9681-09899214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'mailrec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa4a46d34045_54411259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa4a46d34045_54411259')) {function content_57aa4a46d34045_54411259($_smarty_tpl) {?>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Logo, nombre y menú contraído -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <span class="sr-only"> Men&uacute; de navegaci&oacute;n </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/index/index"> <img src="/img/sistema/logo.png" id="img_logo"> Gu&iacute;a Digital </a>
            </div>

            <!-- Menú desplegable -->
            <div class="collapse navbar-collapse navbar" id="menu">
                
                <!-- Menú -->
                <ul class="nav navbar-nav">
                    
                    <!-- Inicio -->
                    <li>
                        <a  href="/index/index"><i class="fa fa-home fa-1x" id="icono-menu"></i> <os-p >Inicio</os-p> </a>
                    </li>
                    
                    <!-- Rubros -->
                    <li>
                            <a id="link-menu" href="/rubros/" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-list fa-1x" id="icono-menu"></i> <os-p >Rubros</os-p><span class="caret"> </a>
                            
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="/empresas/?search=automotores"> Automotores </a></li>
                            <li><a href="/empresas/?search=educacion"> Educaci&oacute;n </a></li>
                            <li><a href="/empresas/?search=salud"> Salud </a></li>
                            <li><a href="#"> Sub-Rubro 4 </a></li>
                            <li class="divider"></li>
                            <li><a href="#"> Ver todos... </a></li>
                        </ul>
                    </li>
                    
                    <!-- Menú administrador -->
                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
                        <li>
                            <a id="link-menu" href="/user/"> <i class="fa fa-user fa-1x" id="icono-menu"></i> <os-p >Usuarios</os-p> </a>
                       </li>
                       <li>
                           <a id="link-menu" href="/empresa/"> <i class="fa fa-building fa-1x" id="icono-menu"></i> <os-p >Empresas</os-p> </a>
                       </li>
                   <?php }?>
                    
                    <!-- Contacto si el usuario NO es administrador-->
                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role!='ADM') {?>
                        <li>
                            <a href="/contacto/" ><i class="fa fa-envelope fa-1x" id="icono-menu"></i><os-p > Contacto</os-p></a><div id="notify" class="notify" style="display: none"><?php echo $_smarty_tpl->tpl_vars['mailrec']->value;?>
</div>
                        </li>
                   <?php }?>
                    
                    
                    
                </ul>
                    
                    
                <!-- Menú de usuario -->    
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value->usr) {?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="a_usuario_menu">
                                <img id="img_usuario_menu" src="/img/usuarios/<?php echo $_smarty_tpl->tpl_vars['user_data']->value->imagen;?>
" class="img-circle">
                                <label id="label_usuario_menu"> <?php echo $_smarty_tpl->tpl_vars['user_data']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['user_data']->value->apellido;?>
 </label>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li ><a href="#"><i class="fa fa-pencil-square-o fa-1x" id="icono-menu"></i><os-p > Editar usuario </os-p> </a></li>
                                <li class="divider"></li>
                                <li ><a href="/login/logout/"> <i class="fa fa-sign-out fa-1x" id="icono-menu"></i><os-p > Cerrar sesi&oacute;n </os-p> </a></li>
                            </ul>
                        <?php } else { ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="a_usuario_menu">
                                <img id="img_usuario_menu" src="/img/usuarios/nofoto.png">
                                <label id="label_usuario_menu"> &nbsp; </label>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li ><a href="/login/"> Iniciar sesi&oacute;n </a></li>
                            </ul>
                        <?php }?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php }} ?>
