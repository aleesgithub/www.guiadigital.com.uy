<?php /* Smarty version Smarty-3.1.18, created on 2014-07-31 07:04:19
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\ticket\comprar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3007753d934c3c1e701-00576683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d9122539dba8379996c48f75db8d1f8d65aba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\ticket\\comprar.tpl',
      1 => 1406783050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3007753d934c3c1e701-00576683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d934c3c93a01_00324287',
  'variables' => 
  array (
    'evento' => 0,
    'espectaculo' => 0,
    'lugar' => 0,
    'sector' => 0,
    'telefono' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d934c3c93a01_00324287')) {function content_53d934c3c93a01_00324287($_smarty_tpl) {?><h1> Comprar Ticket para Evento </h1>
<form action="/ticket/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="eventoId" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['id'];?>
" />
<input type="hidden" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha'];?>
" />
<input type="hidden" name="hora" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['hora'];?>
" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Nombre de Espectaculo:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['nombre'];?>
</td>
  </tr>
   <tr>
    <td>Nombre de Evento:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</td>
  </tr>
  <tr>
    <td>Nombre de Lugar Evento:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['lugar']->value['nombre'];?>
</td>
  </tr>
  <tr>
    <td>Nombre de Sector:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['sector']->value['nombre'];?>
</td>
  </tr>
  <tr>
    <td>Precio de Ingreso $:</td>
    <td><input name="precio" type="text" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['precio'];?>
" disabled="disabled"/></td>
  </tr>
  <tr>
    <td>Ingrese Cantidad a Comprar:</td>
    <td><select name="cantentradas" id="cantentradas"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>
  </tr>
  <tr>
    <td>SU COMPRA TOTAL ES DE $:</td>
    <td><input name="totalprecio" type="text" id="totalprecio" value="0" /></td>
  </tr>

  <tr>
    <td>Ingrese su Telefono(*):</td>
    <td><input name="telefono" type="text" id="telefono" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
" /></td>
  </tr>
  <tr>
    <td>Ingrese su PIN(*):</td>
    <td><input name="pin" type="hidden" id="pin" value="" /></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Enviar" /></td>
  </tr>

</table>
</form>
<?php }} ?>
