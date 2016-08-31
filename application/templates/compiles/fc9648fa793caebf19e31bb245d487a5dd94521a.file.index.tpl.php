<?php /* Smarty version Smarty-3.1.18, created on 2015-04-17 18:42:22
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\funcionario\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6158540e14b7cd3ee7-86027360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc9648fa793caebf19e31bb245d487a5dd94521a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\funcionario\\index.tpl',
      1 => 1429288939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6158540e14b7cd3ee7-86027360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_540e14b7ef0a63_74710527',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540e14b7ef0a63_74710527')) {function content_540e14b7ef0a63_74710527($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>

<table width="100%">
    <tr>
        <td width="30%">
            <input type="button" class="btn btn-default" onclick="location.href='/funcionario/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agragar Funcionario");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agragar Funcionario");?>
">
            
        </td>
        <td width="30%">
            &nbsp;
        </td>
        <td>
            <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </td>
    </tr>
</table>

<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<table border="0" class="table table-hover" style="font-size: 14px">
  <tr>
    
    <td width="5%" align="left"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</strong></td>
    <td width="10%" align="left"><strong>Nombre</strong></td>
    <td width="10%" align="left"><strong>Apellido</strong></td>
    <td width="5%" align="left"><strong>Estado</strong></td>
    <td width="5%" align="left"><strong>Cargo</strong></td>
    <td width="8%" align="left"><strong>Ingreso</strong></td>
    <td width="8%" align="left"><strong>Egreso</strong></td>
    <td width="24%" align="left"><strong>E-mail</strong></td>
    <td width="5%" align="left"><strong>C&oacute;digo</strong></td>
    <td width="20%" align="left"></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <tr>
    
    <td><a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
" /></a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cargo'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ingreso'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['egreso'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['codigo'];?>
</td>
    <td> 
        <input type="button" class="btn btn-default" onclick="location.href='/funcionario/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
        <input type="button" class="btn btn-default" onclick="return confirmar('/funcionario/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
    </td>
  </tr>
  <?php } ?>
</table><?php }} ?>
