<?php /* Smarty version Smarty-3.1.18, created on 2015-08-14 17:52:54
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\proyecto\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:681554a6fe6321b524-62566556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6784595c591eae1b149f537f1056ada091e30f8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\proyecto\\index.tpl',
      1 => 1439567506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '681554a6fe6321b524-62566556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54a6fe6333a6d9_91256698',
  'variables' => 
  array (
    'controller' => 0,
    'Tr' => 0,
    'estados' => 0,
    'estado' => 0,
    'rows' => 0,
    'row' => 0,
    'user_data' => 0,
    'colaboradores' => 0,
    'col' => 0,
    'print' => 0,
    'ctrl' => 0,
    'disabled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6fe6333a6d9_91256698')) {function content_54a6fe6333a6d9_91256698($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div id='cssmenu'>
<ul>
    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Promocion') {?>class="cssmenu"<?php }?>>     <a onclick="location.href='/proyecto/?tipo=promocion&estado=' + document.getElementById('estado').value"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("Promociones"));?>
</a></li>
    
    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Convenio') {?> class="active" <?php }?>>     <a onclick="location.href='/proyecto/?tipo=producto&estado=' + document.getElementById('estado').value"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("Productos"));?>
</a></li>
    
    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Producto') {?> class="active" <?php }?>>     <a onclick="location.href='/proyecto/?tipo=convenio&estado=' + document.getElementById('estado').value"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("convenios"));?>
</a></li>
</ul>
</div>

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
      <th width="10%" align="center"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("referencia"));?>
</th>
      <th width="10%" align="center"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("tipo"));?>
</th>
      <th width="10%" align="center"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("estado"));?>
</th>
      <th width="10%" align="center"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("creado"));?>
</th>
      <th width="10%" align="center"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("actualizado"));?>
</th>
      <th width="20%" align="right"></th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["print"] = new Smarty_variable(0, null, 0);?> 
        <?php if ($_smarty_tpl->tpl_vars['row']->value['usuario']==$_smarty_tpl->tpl_vars['user_data']->value->usr) {?><?php $_smarty_tpl->tpl_vars["print"] = new Smarty_variable('1', null, 0);?><?php }?>
        <?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colaboradores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
           
            <?php if ($_smarty_tpl->tpl_vars['row']->value['id']==$_smarty_tpl->tpl_vars['col']->value['proyectoId']) {?>
                <?php if ($_smarty_tpl->tpl_vars['col']->value['usuario']==$_smarty_tpl->tpl_vars['user_data']->value->usr) {?><?php $_smarty_tpl->tpl_vars["print"] = new Smarty_variable('1', null, 0);?><?php }?>
            <?php }?>
        <?php } ?>
        <?php $_smarty_tpl->tpl_vars["ctrl"] = new Smarty_variable("nota", null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['tipo']=="Procedimiento") {?><?php $_smarty_tpl->tpl_vars["ctrl"] = new Smarty_variable('capitulo', null, 0);?><?php }?>
        
        
        <?php if ($_smarty_tpl->tpl_vars['print']->value||$_smarty_tpl->tpl_vars['row']->value['estado']=='Vigente') {?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                <td><a href="/<?php echo $_smarty_tpl->tpl_vars['ctrl']->value;?>
/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['codRef'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['tipo'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
                <td> <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable('', null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['estado']!='Desarrollo') {?> <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable("disabled='disabled'", null, 0);?><?php }?>
                  <input type="button" class="btn btn-default" onclick="location.href='/proyecto/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                  <input type="button" class="btn btn-default" onclick="return confirmar('/proyecto/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
