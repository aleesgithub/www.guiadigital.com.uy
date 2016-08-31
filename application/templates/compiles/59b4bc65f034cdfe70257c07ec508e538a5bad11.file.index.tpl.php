<?php /* Smarty version Smarty-3.1.18, created on 2016-08-18 19:46:51
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1807755e5febd429bf4-11069574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b4bc65f034cdfe70257c07ec508e538a5bad11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\index\\index.tpl',
      1 => 1471542410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1807755e5febd429bf4-11069574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e5febd453e01_08754277',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e5febd453e01_08754277')) {function content_55e5febd453e01_08754277($_smarty_tpl) {?><!-- Pantalla index -->

<div class="container" id="container-index">
    <div class="row">
        <!-- xs -->
        <div class="visible-xs" id="div-texto-index-xs">
            <h3 id="texto-index">Gu&iacute;a de empresas y servicios</h3>
        </div>
        <!-- sm-md-lg -->
        <div class="hidden-xs col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2" id="div-texto-index">
            <h1 id="texto-index">Gu&iacute;a de empresas y servicios</h1>
        </div>
        
    </div>
    <div class="row">
        <div class="hidden-xs col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <h4 id="texto-index">Aquí está lo que buscas<br> 
                Encuentra todo eso y mucho mas<br><br><br>
            </h4>
        </div>
    </div>
    
    <!-- Cuadro de busqueda -->
    <div class="row">
        <form class="form-horizontal" action='/empresa/listar/' method='get'>
            <!-- xs -->
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg" id="div-buscador-xs">
                <input type="text" class="form-control" id="cuadro_texto-buscar" name='search' required autofocus><!--
                --><button type="submit" class="btn btn-danger btn-lg" id="boton-buscar">Buscar</button>
            </div>
            <!-- sm-md-lg -->
            <div class="hidden-xs col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2" id="div-buscador">
                <input type="text" class="form-control" id="cuadro_texto-buscar" name='search' required autofocus><!--
                --><button type="submit" class="btn btn-danger btn-lg" id="boton-buscar">Buscar</button>
            </div>
            
        </form>
    </div>
</div>

<?php }} ?>
