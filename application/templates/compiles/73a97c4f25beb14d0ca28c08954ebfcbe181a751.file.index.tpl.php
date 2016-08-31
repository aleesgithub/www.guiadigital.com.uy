<?php /* Smarty version Smarty-3.1.18, created on 2015-04-01 18:50:50
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\capitulo\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11106550b2603173269-00417528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a97c4f25beb14d0ca28c08954ebfcbe181a751' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\capitulo\\index.tpl',
      1 => 1427907040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11106550b2603173269-00417528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_550b26034e75e7_23565816',
  'variables' => 
  array (
    'proyecto' => 0,
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
    'user_data' => 0,
    'info' => 0,
    'disabled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b26034e75e7_23565816')) {function content_550b26034e75e7_23565816($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>
<table width="100%">
    <tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/capitulo/crear/proyectoId/<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agregar Capitulo");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Nuevo");?>
">
        </td>
        <td>    
            <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </td>
    </tr>
</table>
        
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                
                <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars["info"] = new Smarty_variable('', null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['proyecto']->value['estado']!='Desarrollo'||$_smarty_tpl->tpl_vars['row']->value['usuario']!=$_smarty_tpl->tpl_vars['user_data']->value->usr) {?>
                    <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable("disabled='disabled'", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["info"] = new Smarty_variable("<img src='/img/info.png' style='cursor: pointer' width='25' height='25' onclick='info(\"Las Notas pueden ser modificadas &uacute;nicamente por el usuario creador\")'>", null, 0);?>
                <?php }?>
                <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</strong>&nbsp;&nbsp;<label class="lbl1">Creada:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
 </label>
                
            <div class="nota" ><?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>
(<?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
)<br>
            
            <div class="notabtn" ><?php echo $_smarty_tpl->tpl_vars['info']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['row']->value['capituloId']!=1) {?>
                    <input type="button" class="btn btn-default" style="font-size: 12px" onclick="location.href='/comentario/crear/notaId/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("comentar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agregar Comentario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
                <?php }?>
                <input type="button" class="btn btn-default" style="font-size: 12px" onclick="location.href='/nota/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Editar nota");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                <input type="button" class="btn btn-default" style="font-size: 12px" onclick="return confirmar('/nota/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar la nota (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Eliminar Nota ");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
            </div>
            
            </div>
              
              <?php } ?>
<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php }} ?>
