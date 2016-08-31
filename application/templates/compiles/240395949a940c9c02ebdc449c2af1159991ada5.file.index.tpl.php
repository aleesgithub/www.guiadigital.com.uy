<?php /* Smarty version Smarty-3.1.18, created on 2015-08-12 21:14:38
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\evaluacion\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3146954b7ea730e2de6-74598289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '240395949a940c9c02ebdc449c2af1159991ada5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\evaluacion\\index.tpl',
      1 => 1439406871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3146954b7ea730e2de6-74598289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b7ea731fcfd5_62222869',
  'variables' => 
  array (
    'controller' => 0,
    'proyecto' => 0,
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b7ea731fcfd5_62222869')) {function content_54b7ea731fcfd5_62222869($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div id='cssmenu'>
<ul>
    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Nota') {?> class="active"<?php }?>><a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("notas"));?>
</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Evaluacion') {?> class="active"<?php }?>><a href="/evaluacion/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("evaluaciones"));?>
</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Comunicado') {?> class="active"<?php }?>><a href="/comunicado/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("comunicados"));?>
</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='Pregunta') {?> class="active"<?php }?>><a href="/pregunta/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Preguntas y Respuestas");?>
</a></li>
    
</ul>
    
</div>
<div id='csssubmenu'>
    <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<table width="100%"><tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/evaluacion/crear/proyectoId/<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agregar Evaluacion");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agregar Evaluacion");?>
">
        </td>
        <td>
            <!--<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
-->
        </td>
    </tr>
</table>
   <table border="0"  width="100%" class="table table-hover">
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    
   
        <tr>
            <td width="90%" align="left"  colspan="2"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</strong>&nbsp;&nbsp;<label class="lbl1">Creada:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
 -- Actualizada:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</label></td>
            <td width="10%"> Est.:<?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
            
        </tr>
        <tr>
            <td  class="textarea" colspan="2"><?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>
(<?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
)</td>
            <td><input type="button" class="btn btn-default" onclick="location.href='/evaluacion/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_evaluacion");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
                <input type="button" class="btn btn-default" onclick="location.href='/mail/crear/proyectoId/<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
/param/Evaluacion/paramId/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("notificar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("notificar");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
                <input type="button" class="btn btn-default" onclick="return confirmar('/evaluacion/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar el evaluacion (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)"></td>
        </tr>
        
        
    
        
  <?php } ?></table>
<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php }} ?>
