<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 23:25:26
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1295357aa4a46d6a808-52347039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a65f65e5f14be098e9dbdd7efba6a0902b7d8d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\carousel.tpl',
      1 => 1456155101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1295357aa4a46d6a808-52347039',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa4a46d6db31_28512290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa4a46d6db31_28512290')) {function content_57aa4a46d6db31_28512290($_smarty_tpl) {?><!-- Slide de imágenes -->
<div class="col-xs-12 col-sm-7 col-sm-offset-1 col-md-7 col-md-offset-1 col-lg-7 col-lg-offset-1">
    <div id="carousel-index" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-index" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-index" data-slide-to="1"></li>
            <li data-target="#carousel-index" data-slide-to="2"></li>
            <li data-target="#carousel-index" data-slide-to="3"></li>
            <li data-target="#carousel-index" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/img/Carousel/001.png" alt="Automotores" class="img_transparente">
                <div class="carousel-caption">
                    <h3> Automotores </h3>
                    <p> Taller mec&aacute;nico - Rentadoras - Electricista automotriz ... </p>
                    <p><button type="button" class="btn btn-primary">Ver mas</button></p>
                </div>
            </div>
            <div class="item">
                <img src="/img/Carousel/002.png" alt="Ense&ntilde;anza" class="img_transparente">
                <div class="carousel-caption">
                    <h3> Ense&ntilde;anza </h3>
                    <p> Colegios - Liceos - Universidades - Institutos ... </p>
                    <p><button type="button" class="btn btn-primary">Ver mas</button></p>
                </div>
            </div>
            <div class="item">
                <img src="/img/Carousel/003.png" alt="Salud" class="img_transparente">
                <div class="carousel-caption">
                    <h3> Salud </h3>
                    <p> Residenciales - Acompañantes - Enfermería - Sanatorios ... </p>
                    <p><button type="button" class="btn btn-primary">Ver mas</button></p>
                </div>
            </div>
            <div class="item">
                <img src="/img/Carousel/004.png" alt="Turismo" class="img_transparente">
                <div class="carousel-caption">
                    <h3> Turismo </h3>
                    <p> Hoteles - Camping - Estancias tur&iacute;sticas - caba&ntilde;as ... </p>
                    <p><button type="button" class="btn btn-primary">Ver mas</button></p>
                </div>
            </div>
            <div class="item">
                <img src="/img/Carousel/005.png" alt="Profesionales" class="img_transparente">
                <div class="carousel-caption">
                    <h3> Profesionales </h3>
                    <p> Abogados - Escribanos - Alba&ntilde;iles - Sanitarios - Electricistas ... </p>
                    <p><button type="button" class="btn btn-primary">Ver mas</button></p>
                </div>
            </div>
        </div>
        <!-- Controles -->
        <a class="left carousel-control" href="#carousel-index" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#carousel-index" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Siguientet</span>
        </a>
    </div>
</div><?php }} ?>