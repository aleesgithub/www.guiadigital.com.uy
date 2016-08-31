<?php /* Smarty version Smarty-3.1.18, created on 2014-07-27 02:21:58
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\sector\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:437553d42a947ea678-11525463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40c3bf262145358d5609a2e0afedc75546514011' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\sector\\index.tpl',
      1 => 1406420515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '437553d42a947ea678-11525463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d42a94864471_08224578',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'rowsL' => 0,
    'rowL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d42a94864471_08224578')) {function content_53d42a94864471_08224578($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h1>Listado de Sectores</h1>
<!--Agrego link a crear sectores-->
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="text-right"><a href="/sector/crear/">Agregar Sector</a></p>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="50">Id</th>
    <th width="220">Nombre</th>
    <th width="220">Capacidad</th>
    <th width="70">Pertenece a Lugar:</th>
    <th width="248">Creado</th>
    <th width="248">Actualizado</th>
    <th width="248"></th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <!--Creo link para actualizar lugar por id con row.id en nombre de lugar-->
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['capacidad'];?>
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
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %I:%M:%S");?>
</td>
	<td><a href="/sector/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" title="Actualizar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">Actualizar</a> <a href="javascript:confirmar('/sector/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro elimina Sector ?');" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">Eliminar</a></td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
