<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 16:53:59
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\ticket\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2944553e6d166613e17-53175374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dafed980bf0cb11f1962f5c30c699aa5d66f1923' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\ticket\\crear.tpl',
      1 => 1408045030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2944553e6d166613e17-53175374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53e6d166689112_22576841',
  'variables' => 
  array (
    'Tr' => 0,
    'evento' => 0,
    'espectaculo' => 0,
    'lugar' => 0,
    'sector' => 0,
    'ticket' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e6d166689112_22576841')) {function content_53e6d166689112_22576841($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("comprar_entrada");?>
 <?php if ($_smarty_tpl->tpl_vars['evento']->value['nombre']) {?> para (<?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
) <?php }?></h3>

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

<table class="table">
  <tr>
    <td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("espectaculo");?>
:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['nombre'];?>
</td>
  </tr>
   <tr>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("evento");?>
:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</td>
  </tr>
  <tr>
    <td align="center" colspan="2"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("lugar");?>
: <?php echo $_smarty_tpl->tpl_vars['lugar']->value['nombre'];?>
 | <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("sector");?>
: <?php echo $_smarty_tpl->tpl_vars['sector']->value['nombre'];?>
</td>
  </tr>
  <tr>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("precio");?>
 ($):</td>
    <td><input name="precio" type="text" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['precio'];?>
" readonly/></td>
  </tr>
  <tr>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("cantidad");?>
:</td>
    <td><select name="cantidad" id="cantidad"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>
  </tr>
  <tr>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("total");?>
 ($):</td>
    <td><input name="facturado" type="text" id="facturado" value="<?php if ($_smarty_tpl->tpl_vars['ticket']->value['facturado']>0) {?>$ticket.facturado<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['evento']->value['precio'];?>
<?php }?>" readonly/></td>
  </tr>

  <tr>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("ingrese_telefono");?>
 (*):</td>
    <td><input name="telefono" type="text" id="telefono" value="" /><input  type="button" onclick="validarRPC()" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("confirmar");?>
"></td>
  </tr>
  <tr>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("ingrese_pin");?>
 (*):</td>
    <td><input name="pin" type="hidden" id="pin" value="Ingrese su PIN " /></td>
  </tr>

  <tr>
    <td colspan="2" align="center"><input type="submit" name="buttonConf" id="buttonConf" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("confirmar_compra");?>
" disabled="disabled" /></td>
  </tr>

</table>
</form>
<?php }} ?>
