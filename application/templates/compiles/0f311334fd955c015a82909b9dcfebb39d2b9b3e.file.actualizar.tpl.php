<?php /* Smarty version Smarty-3.1.18, created on 2014-07-26 23:16:09
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\lugar\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:857353d41a99b275d4-39564247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f311334fd955c015a82909b9dcfebb39d2b9b3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\lugar\\actualizar.tpl',
      1 => 1406404732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '857353d41a99b275d4-39564247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d41a99ba13d8_30150014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d41a99ba13d8_30150014')) {function content_53d41a99ba13d8_30150014($_smarty_tpl) {?><h1>Actualizar Lugar</h1>
<form action="/lugar/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Nombre(*):</td>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  <tr>
    <td>Direccion:</td>
    <td><input name="direccion" type="text" id="direccion" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['direccion'];?>
" /></td>
  </tr>
    <tr>
    <td>Telefono:</td>
    <td><input name="telefono" type="text" id="telefono" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['telefono'];?>
" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Enviar" /></td>
  </tr>
  <tr>
    <td colspan="2">* Campos obligatorios</td>
    </tr>
</table>
</form>
<?php }} ?>
