<?php /* Smarty version Smarty-3.1.18, created on 2014-07-26 23:22:03
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\lugar\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121953d41bfbdb6ec2-69665579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bd30e22410440dd6e47361c7ac0c114caa1492b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\lugar\\crear.tpl',
      1 => 1406404615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121953d41bfbdb6ec2-69665579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d41bfbdf3dc6_59529850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d41bfbdf3dc6_59529850')) {function content_53d41bfbdf3dc6_59529850($_smarty_tpl) {?><h1>Agregar Lugar</h1>
<form action="/lugar/crear/" method="post">
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
