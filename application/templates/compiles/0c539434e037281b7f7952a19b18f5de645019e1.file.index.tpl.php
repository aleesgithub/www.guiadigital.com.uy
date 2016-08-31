<?php /* Smarty version Smarty-3.1.18, created on 2014-07-27 05:07:05
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\lugarsector\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2504753d46b5233f855-41954300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c539434e037281b7f7952a19b18f5de645019e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\lugarsector\\index.tpl',
      1 => 1406430410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2504753d46b5233f855-41954300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d46b523b9656_20681238',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'rowsL' => 0,
    'rowL' => 0,
    'rowsS' => 0,
    'rowS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d46b523b9656_20681238')) {function content_53d46b523b9656_20681238($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h1>Listado de Lugar y Sector</h1>
<!--Agrego link a crear lugar y sector-->
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="text-right"><a href="/lugarsector/crear/">Agregar Lugar y Sector</a></p>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="50">Id</th>
    <th width="150">Lugar :</th>
    <th width="150">Sector :</th>
    <th width="150">Precio $ :</th>
    <th width="150">Habilitadas:</th>
    <th width="200">Creado</th>
    <th width="200">Actualizado</th>
<th width="248"></th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <!--Creo link para actualizar lugar y sector-->
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
    <?php  $_smarty_tpl->tpl_vars['rowL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowsL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowL']->key => $_smarty_tpl->tpl_vars['rowL']->value) {
$_smarty_tpl->tpl_vars['rowL']->_loop = true;
?>
        
        <?php if ($_smarty_tpl->tpl_vars['rowL']->value['id']==$_smarty_tpl->tpl_vars['row']->value['lugarId']) {?>
		<td><a href="/lugarsector/?lugar=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rowL']->value['nombre'];?>
</a></td>
	
        <?php }?>
        
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['rowS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowsS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowS']->key => $_smarty_tpl->tpl_vars['rowS']->value) {
$_smarty_tpl->tpl_vars['rowS']->_loop = true;
?>
        
        <?php if ($_smarty_tpl->tpl_vars['rowS']->value['id']==$_smarty_tpl->tpl_vars['row']->value['sectorId']) {?>
		<td><a href="/lugarsector/?sector=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rowS']->value['nombre'];?>
</a></td>
	
        <?php }?>
        
    <?php } ?>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['habilitadas'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><a href="/lugarsector/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" title="Actualizar <?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Actualizar</a> <a href="javascript:confirmar('/lugarsector/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro elimina este Lugar y Sector');" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Eliminar</a></td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
