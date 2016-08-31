<?php /* Smarty version Smarty-3.1.18, created on 2015-04-16 21:56:56
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\rol\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9106553003336346d8-06379567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07131d818dc8c38992d53140082eca40a5ffe5e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\rol\\index.tpl',
      1 => 1429214209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9106553003336346d8-06379567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_553003337d44b9_73807950',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553003337d44b9_73807950')) {function content_553003337d44b9_73807950($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3>Lista de Roles</h3>
<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<table border="0" class="table table-hover">
  <tr>
    
    <td width="5%" align="center"><strong>Id</strong></td>
    <td width="10%" align="center"><strong>Rol</strong></td>
    <td width="25%" align="center"><strong>Detalle</strong></td>
 
    <td width="20%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</strong></td>
    <td width="20%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_actualizado");?>
</strong></td>
    <td width="20%" align="right"><input type="button" class="btn btn-default" onclick="location.href='/rol/crear/'" value="Agregar Rol" title="Agregar un rol"></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <tr>
    
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['rol'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['observaciones'];?>
</td>
    
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
    
    <td> 
        <input type="button" class="btn btn-default" onclick="location.href='/rol/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="Editar rol  (<?php echo $_smarty_tpl->tpl_vars['row']->value['rol'];?>
)">
        <input type="button" class="btn btn-default" onclick="return confirmar('/rol/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar el rol (<?php echo $_smarty_tpl->tpl_vars['row']->value['rol'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="Eliminar el rol (<?php echo $_smarty_tpl->tpl_vars['row']->value['rol'];?>
)">
    </td>
  </tr>
  <?php } ?>
</table><?php }} ?>
