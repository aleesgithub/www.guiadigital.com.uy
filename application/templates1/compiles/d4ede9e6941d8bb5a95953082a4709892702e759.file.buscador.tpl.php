<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 23:25:26
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\buscador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253157aa4a46d464a5-25919986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4ede9e6941d8bb5a95953082a4709892702e759' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\buscador.tpl',
      1 => 1456173541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253157aa4a46d464a5-25919986',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa4a46d47f31_71451362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa4a46d47f31_71451362')) {function content_57aa4a46d47f31_71451362($_smarty_tpl) {?><div class="container">
    <div class="row" id="div_buscador">
        <form action='/empresa/listar/' method='get' id="form_buscar">
            <input type="text" id="cuadro_buscar" class="formsearch" placeholder="Ingrese texto a buscar ..." name='search' required autofocus> &nbsp;<button type="submit" class="btn-success btn" id="boton_buscar">Buscar</button>
        </form>
        <br />
    </div>
</div><?php }} ?>
