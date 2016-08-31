<?php /* Smarty version Smarty-3.1.18, created on 2016-08-11 17:21:50
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\buscador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1812757ab3a88841f60-53038334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4ede9e6941d8bb5a95953082a4709892702e759' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\buscador.tpl',
      1 => 1470928908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1812757ab3a88841f60-53038334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57ab3a88869500_08674699',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3a88869500_08674699')) {function content_57ab3a88869500_08674699($_smarty_tpl) {?><div class="container-fluid well container-buscador">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-1 col-md-6 col-md-offset-1 col-lg-5 col-lg-offset-1 texto-index">
            <h1>Gu&iacute;a de empresas, profesionales y servicios.</h1>
            <h4>Este es un texto de pruebas para poder diverenciar el texto h3 del h1.<br> 
                Acá sigue el texto, le di un enter para que siga escribiendo abajo.<br><br><br>
            </h4>
        </div>
    </div>
    <div class="row">
        <form action='/empresa/listar/' method='get'>
        <div class="col-sm-7 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 buscador">
            <input type="text" id="cuadro_texto-buscar" name='search' required autofocus><br><br><button type="submit" class="btn-danger btn-lg" id="boton-buscar">Buscar</button>
        </div>
        </form>
        
    </div>
</div><?php }} ?>
