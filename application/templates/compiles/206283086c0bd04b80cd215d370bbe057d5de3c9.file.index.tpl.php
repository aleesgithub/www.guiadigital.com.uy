<?php /* Smarty version Smarty-3.1.18, created on 2014-07-27 08:51:24
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\producto\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2113153d4a16c5b7cc8-24062366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206283086c0bd04b80cd215d370bbe057d5de3c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\producto\\index.tpl',
      1 => 1406119362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2113153d4a16c5b7cc8-24062366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'categoria' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d4a16c6e87c0_02004858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4a16c6e87c0_02004858')) {function content_53d4a16c6e87c0_02004858($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h1><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("product_list");?>
 <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?> <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
<?php }?></h1>
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Agrego link a crear categoria-->
<p class="text-right"><a href="/producto/crear/" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('add');?>
" class="glyphicon glyphicon-floppy-disk"></a></p>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="170"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("id");?>
</th>
    <th width="170"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("image");?>
</th>
    <th width="180"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("name");?>
</th>
    <th width="500"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("desc");?>
</th>
    <th width="248"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("price");?>
</th>
    <th width="248"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("created");?>
</th>
	<th width="248"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("updated");?>
</th>
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
    <td><a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
" /></a></td>
    <td><a href="/producto/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
    <td class="small"><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %I:%M:%S");?>
</td>
	<td><a href="/producto/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('update');?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" class="glyphicon glyphicon-edit"></a> <a href="javascript:confirmar('/producto/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', '<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("confirm_delete");?>
');" class="glyphicon glyphicon-floppy-remove" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
"></a></td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>