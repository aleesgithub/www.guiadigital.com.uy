<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:25
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\espectaculo\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1159853d4a15a3c6cc5-93379484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097b53975dd78db1445aa7d1ff16f4643c4fa815' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\espectaculo\\index.tpl',
      1 => 1408054474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159853d4a15a3c6cc5-93379484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d4a15a440ac7_79644180',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4a15a440ac7_79644180')) {function content_53d4a15a440ac7_79644180($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_espectaculos");?>
</h3>

<table border="0" class="table table-hover">
  <tr>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("id");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</strong></td>
    <td width="100" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</strong></td>
    <td width="150" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("descripcion");?>
</strong></td>
    <td width="50" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</strong></td>
    <td width="50" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_actualizado");?>
</td>
    <td width="20%" align="right"><input type="button" class="btn btn-default" onclick="location.href='/espectaculo/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_espectaculo");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_espectaculo");?>
"></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr>
    <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</strong></td>
    <td align="center"><a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" width="45" height="45"/></a></td>
    <td><a href="/evento/?espectaculoId=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
    <td width="150"><?php echo substr($_smarty_tpl->tpl_vars['row']->value['descripcion'],0,30);?>
<a href="/evento/?espectaculoId=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">...+Ampliar</a></td>
    <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td align="left"> 
        <input type="button" class="btn btn-default" onclick="location.href='/espectaculo/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_espectaculo");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
        <input type="button" class="btn btn-default" onclick="return confirmar('/espectaculo/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_espectaculo");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
    </td>
  </tr>
  <?php } ?>
</table><?php }} ?>
