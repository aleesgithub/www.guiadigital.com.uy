<?php /* Smarty version Smarty-3.1.18, created on 2015-09-01 20:56:10
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\empresa\listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2742855e5f4cabae425-50960625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d5cbb13f15dae2be4a6c09cb8d1719ad99ee11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\empresa\\listar.tpl',
      1 => 1441132716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2742855e5f4cabae425-50960625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'estados' => 0,
    'estado' => 0,
    'rows' => 0,
    'row' => 0,
    'user_data' => 0,
    'disabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e5f4cac48474_55407250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e5f4cac48474_55407250')) {function content_55e5f4cac48474_55407250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>

<object data="/aviso/aviso6.mp3" autostart="true" volume="100" width="0" height="0">
</object>

<table width="100%">
    <tr>
        <td width="30%">
            <input type="button" class="btn btn-default" onclick="location.href='/proyecto/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agregar Proyecto");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agregar Proyecto");?>
">
            
        </td>
        <td width="30%">
            <label class="lbl3">Estado</label><select class="text" id='estado' id="estado" name='estado' onchange="location.href='?estado='+this.value"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado']->value),$_smarty_tpl);?>
</select>
        </td>
        <td>
            <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </td>
    </tr>
</table>
       
<table class="table">
    <tr>

      <th width="5%" align="center"> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Id");?>
</strong></th>
      <th width="20%" align="center"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("nombre"));?>
</th>
      <th width="5%" align="center"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("usuario"));?>
</th>
      <th width="10%" align="center"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("direccion"));?>
</th>
      <th width="10%" align="center"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("web"));?>
</th>
      <th width="10%" align="center"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("telefono"));?>
</th>
      
      <th width="20%" align="right"></th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['estado']=='Vigente'||$_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['direccion'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['web'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
                <td> 
                  <input type="button" class="btn btn-default" onclick="location.href='/empresa/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                  <input type="button" class="btn btn-default" onclick="return confirmar('/empresa/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)"  <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>

                </td>
            </tr>
        <?php }?>
        
    <?php } ?>
</table>
<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php }} ?>
