<?php /* Smarty version Smarty-3.1.18, created on 2014-07-26 22:50:22
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\espectaculo\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2327653cfe3d167b5d3-85553157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c3179adc41d8f425ed1c86ee045e856e80da76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\espectaculo\\index.tpl',
      1 => 1406407819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327653cfe3d167b5d3-85553157',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53cfe3d173a736_89363067',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cfe3d173a736_89363067')) {function content_53cfe3d173a736_89363067($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h1>Listado de Espectaculo</h1>
<!--Agrego link a crear espectaculo-->
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="text-right"><a href="/espectaculo/crear/">Agregar Espectaculo</a></p>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="50">Id</th>
    <th width="150">Nombre</th>
    <th width="150"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("image");?>
</th>
    <th width="400">Descripcion</th>
    <th width="200">Creado</th>
    <th width="200">Actualizado</th>
<th width="248"></th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <!--Creo link para actualizar espectaculo por id con row.id en nombre de categoria-->
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
    <td><a href="/evento/?espectaculo=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
    <td><a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
" /></a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %I:%M:%S");?>
</td>
	<td><a href="/espectaculo/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" title="Actualizar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">Actualizar</a> <a href="javascript:confirmar('/espectaculo/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro elimina este espectaculo');" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">Eliminar</a></td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
