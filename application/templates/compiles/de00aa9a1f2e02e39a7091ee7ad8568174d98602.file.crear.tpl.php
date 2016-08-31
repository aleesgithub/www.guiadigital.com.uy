<?php /* Smarty version Smarty-3.1.18, created on 2014-08-09 22:40:52
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\ticket\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2896753d933a63aba67-49914445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de00aa9a1f2e02e39a7091ee7ad8568174d98602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\ticket\\crear.tpl',
      1 => 1407623790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2896753d933a63aba67-49914445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d933a6420d77_28933215',
  'variables' => 
  array (
    'evento' => 0,
    'espectaculo' => 0,
    'lugar' => 0,
    'sector' => 0,
    'ticket' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d933a6420d77_28933215')) {function content_53d933a6420d77_28933215($_smarty_tpl) {?>
<h1> Comprar Ticket para Evento </h1>
<form action="/ticket/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="eventoId" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['id'];?>
" />
<input type="hidden" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha'];?>
" />
<input type="hidden" name="hora" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['hora'];?>
" />
<input type="hidden" name="espectaculoId" value="<?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['id'];?>
" />
<input type="hidden" name="pinId" value="" id="pinId"/>

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
    <td>Lugar del Evento:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['lugar']->value['nombre'];?>
</td>
  </tr>
  <tr>
    <td>Nombre de Sector:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['sector']->value['nombre'];?>
</td>
  </tr>
  <tr>
    <td>Precio ($):</td>
    <td><input name="precio" type="text" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['precio'];?>
" readonly/></td>
  </tr>
  <tr>
    <td>Ingrese Cantidad a Comprar:</td>
    <td><select name="cantidad" id="cantidad"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>
  </tr>
  <tr>
    <td>SU COMPRA TOTAL ES DE $:</td>
    <td><input name="facturado" type="text" id="facturado" value="<?php if ($_smarty_tpl->tpl_vars['ticket']->value['facturado']>0) {?>$ticket.facturado<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['evento']->value['precio'];?>
<?php }?>" readonly/></td>
  </tr>

  <tr>
    <td>Ingrese su Telefono(*):</td>
    <td><input name="telefono" type="text" id="telefono" value="" /><input  type="button" onclick="validarRPC()" value="Confirmar Tel&eacute;fono &raquo;"></td>
  </tr>
  <tr>
    <td>Ingrese su PIN(*):</td>
    <td><input name="pin" type="hidden" id="pin" value="Ingrese su PIN " /></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Confirmar Tel&eacute;fono" disabled="disabled" /></td>
  </tr>

</table>
</form>
<?php }} ?>
