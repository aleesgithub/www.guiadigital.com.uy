<?php /* Smarty version Smarty-3.1.18, created on 2015-08-14 21:45:16
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1388753f3798edfaed9-73726944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1000038c1ae13945896035127f3064218607be18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\user\\index.tpl',
      1 => 1439577193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388753f3798edfaed9-73726944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f3798eed9014_47856186',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f3798eed9014_47856186')) {function content_53f3798eed9014_47856186($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_usuarios");?>
</h3><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<table border="0" class="table" id="tabla3">
  <tr>
    
    <th width="5" align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</th>
    <th width="5%" align="center"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("usuario"));?>
</th>
    <th width="5%" align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("rol");?>
</th>
    <th width="10%" align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</th>
    <th width="10%" align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("apellido");?>
</th>
    <th width="15%" align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("mail");?>
</th>
 
    <th width="12%" align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</th>
    <th width="12%" align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_actualizado");?>
</th>
    <th width="12%" align="center"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("ultima_sesion"));?>
</th>
 
    <th width="14%" align="right"><input type="button" class="btn" onclick="location.href='/user/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_usuario");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_usuario");?>
"></th>
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
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usr'];?>
</td>
    <td><label class="lbl1"> (<?php echo $_smarty_tpl->tpl_vars['row']->value['role'];?>
)</label>
      <!--<?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='USR') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Usuario");?>
<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='ADM') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Administrador");?>
<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='CCL') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Comit&eacute; Comercial");?>
<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='REP') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Reporte");?>
<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='INV') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Invitado");?>
<?php }?>-->
    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
</td>
    <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</a></td>
    
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['lastLog'],"%d/%m/%Y %H:%M:%S");?>
</td>
   
    <td> 
        <input type="button" class="btn" onclick="location.href='/user/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
        <input type="button" class="btn" onclick="return confirmar('/user/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
    </td>
  </tr>
  <?php } ?>
</table>
<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php }} ?>
