<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 16:41:39
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\categoria\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826553d4a14b961123-26143839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4b5c7e831fdcbb8fc38abc5b0926fbef250f90e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\categoria\\index.tpl',
      1 => 1408045098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826553d4a14b961123-26143839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d4a14ba17e35_84908394',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4a14ba17e35_84908394')) {function content_53d4a14ba17e35_84908394($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_categorias");?>
</h3>

<table border="0" class="table table-hover">
  <tr>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("id");?>
</strong></td>
    <td width="25%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</strong></td>
    <td width="25%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</strong></td>
    <td width="25%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_actualizado");?>
</strong></td>
    <td width="20%" align="right"><input type="button" class="btn btn-default" onclick="location.href='/categoria/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_categoria");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_categoria");?>
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
    <td><a href="/espectaculo/?categoria=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
    <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td align="left"> 
        <input type="button" class="btn btn-default" onclick="location.href='/categoria/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_categoria");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
        <input type="button" class="btn btn-default" onclick="return confirmar('/categoria/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_categoria");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
        </td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
