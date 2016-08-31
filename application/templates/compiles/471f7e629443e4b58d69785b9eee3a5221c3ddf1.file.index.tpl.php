<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 17:02:26
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\lugar\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:601253d4a1605c5c79-71225451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471f7e629443e4b58d69785b9eee3a5221c3ddf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\lugar\\index.tpl',
      1 => 1408045178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '601253d4a1605c5c79-71225451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d4a16067c978_53941854',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4a16067c978_53941854')) {function content_53d4a16067c978_53941854($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_lugares");?>
</h3>

<table width="612" border="0" class="table table-hover">
  <tr>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("id");?>
</strong></td>
    <td width="20%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</strong></td>
    <td width="20%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("direccion");?>
</strong></td>
    <td width="20%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("telefono");?>
</strong></td>
    <td width="10%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</strong></td>
    <td width="10%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_actualizado");?>
</strong></td>
    <td width="15%" align="right"><input type="button" class="btn btn-default" onclick="location.href='/lugar/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_lugar");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_lugar");?>
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
    <td><a href="/sector/?lugar=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['direccion'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td> 
        <input type="button" class="btn btn-default" onclick="location.href='/lugar/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_lugar");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
        <input type="button" class="btn btn-default" onclick="return confirmar('/lugar/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_lugar");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
    </td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
