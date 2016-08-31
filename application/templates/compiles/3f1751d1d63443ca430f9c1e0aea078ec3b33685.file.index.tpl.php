<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 17:08:38
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\sector\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3072553d4a162f01db0-79412754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f1751d1d63443ca430f9c1e0aea078ec3b33685' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\sector\\index.tpl',
      1 => 1408045218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3072553d4a162f01db0-79412754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d4a1630b35c0_79518707',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
    'rowsL' => 0,
    'rowL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4a1630b35c0_79518707')) {function content_53d4a1630b35c0_79518707($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_sectores");?>
</h3>

<table width="612" border="0" class="table table-hover">
  <tr>
      <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("id");?>
</strong></td>
      <td width="25%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</strong></td>
      <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("capacidad");?>
</strong></td>
      <td width="15%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("lugar");?>
</strong></td>
      <td width="15%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</strong></td>
      <td width="15%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_actualizado");?>
</strong></td>
      <td width="20%" align="right"><input type="button" class="btn btn-default" onclick="location.href='/sector/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_sector");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_sector");?>
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
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['capacidad'];?>
</td>
    <?php  $_smarty_tpl->tpl_vars['rowL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowsL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowL']->key => $_smarty_tpl->tpl_vars['rowL']->value) {
$_smarty_tpl->tpl_vars['rowL']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['rowL']->value['id']==$_smarty_tpl->tpl_vars['row']->value['lugarId']) {?>
		<td><a href="/sector/?lugar=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rowL']->value['nombre'];?>
</a></td>
        <?php }?>
    <?php } ?>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td>
	<input type="button" class="btn btn-default" onclick="location.href='/sector/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_sector");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
        <input type="button" class="btn btn-default" onclick="return confirmar('/sector/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_sector");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
    </td>    
  </tr>
  <?php } ?>
</table>
<?php }} ?>
