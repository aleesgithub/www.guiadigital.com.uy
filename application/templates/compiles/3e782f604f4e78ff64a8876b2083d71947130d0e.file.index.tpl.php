<?php /* Smarty version Smarty-3.1.18, created on 2014-07-26 15:15:08
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\categoria\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1641153bc814f7eda90-26799236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e782f604f4e78ff64a8876b2083d71947130d0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\categoria\\index.tpl',
      1 => 1406144480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1641153bc814f7eda90-26799236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc814f867891_70197879',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc814f867891_70197879')) {function content_53bc814f867891_70197879($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h1>Listado de Categor&iacute;as</h1>
<!--Agrego link a crear categoria-->
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="text-right"><a href="/categoria/crear/">Agregar Categor&iacute;a</a></p>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="170">Id</th>
    <th width="180">Nombre</th>
    <th width="248">Creado</th>
	<th width="248">Actualizado</th>
<th width="248"></th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <!--Creo link para actualizar categoria por id con row.id en nombre de categoria-->
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
    <td><a href="/espectaculo/?categoria=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %I:%M:%S");?>
</td>
	<td><a href="/categoria/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" title="Actualizar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">Actualizar</a> <a href="javascript:confirmar('/categoria/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'seguro eli');" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">Eliminar</a></td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
