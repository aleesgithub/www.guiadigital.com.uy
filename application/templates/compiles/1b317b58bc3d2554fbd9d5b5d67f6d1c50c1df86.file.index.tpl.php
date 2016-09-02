<?php /* Smarty version Smarty-3.1.18, created on 2016-09-01 19:44:54
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\nota\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1333157c869164c2689-70297848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b317b58bc3d2554fbd9d5b5d67f6d1c50c1df86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\nota\\index.tpl',
      1 => 1439404667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333157c869164c2689-70297848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controlador' => 0,
    'proyecto' => 0,
    'Tr' => 0,
    'user_data' => 0,
    'rows' => 0,
    'row' => 0,
    'antecedentes' => 0,
    'nota' => 0,
    'cantant' => 0,
    'comentarios' => 0,
    'come' => 0,
    'cantcom' => 0,
    'imgant' => 0,
    'imgcom' => 0,
    'info' => 0,
    'disabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c86916542413_63523257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c86916542413_63523257')) {function content_57c86916542413_63523257($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div id='cssmenu'>
<ul>
    <li <?php if ($_smarty_tpl->tpl_vars['controlador']->value=='Nota') {?> class="active"<?php }?>><a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("notas"));?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
    <li <?php if ($_smarty_tpl->tpl_vars['controlador']->value=='Evaluacion') {?> class="active"<?php }?>><a href="/evaluacion/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("evaluaciones"));?>
</a></li>
    <?php }?>
    <li <?php if ($_smarty_tpl->tpl_vars['controlador']->value=='Comunicado') {?> class="active"<?php }?>><a href="/comunicado/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("comunicados"));?>
</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['controlador']->value=='Pregunta') {?> class="active"<?php }?>><a href="/pregunta/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Preguntas y Respuestas");?>
</a></li>
</ul>
</div>
<div id='csssubmenu'>
    <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<table width="100%">
    <tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/nota/crear/proyectoId/<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agregar Nota");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Nuevo");?>
" <?php if ($_smarty_tpl->tpl_vars['proyecto']->value['estado']=='Vigente') {?>disabled='disabled'<?php }?>>
            <input type="button" class="btn btn-default" onclick="location.href='/mail/crear/proyectoId/<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
/param/Nota'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Notificar");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Notificar");?>
">
        </td>
        <td>    
            <!--<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
-->
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
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value->usr!='aesteche'&&$_smarty_tpl->tpl_vars['user_data']->value->usr!='flopez'&&$_smarty_tpl->tpl_vars['user_data']->value->usr!='gacosta'&&$_smarty_tpl->tpl_vars['user_data']->value->usr!='grosas') {?>
                    <?php if ($_smarty_tpl->tpl_vars['proyecto']->value['estado']!='Desarrollo'||$_smarty_tpl->tpl_vars['row']->value['usuario']!=$_smarty_tpl->tpl_vars['user_data']->value->usr) {?>
                        <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable("disabled='disabled'", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["info"] = new Smarty_variable("<img src='/img/info.png' style='cursor: pointer' width='25' height='25' onclick='info(\"Las Notas pueden ser modificadas &uacute;nicamente por el usuario creador\")'>", null, 0);?>
                    <?php }?>
                <?php }?>
                
                <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</strong>&nbsp;&nbsp;
                <label class="lbl1">Creada:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
 </label>
                
                <div class="nota" ><?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>
(<?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
)<br><label class="lbl1">Acceso:</label><label class="acceso"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['acceso'];?>
</strong> </label><br>
            
            <div id='ant<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' style='display:none'>
                <label class="lbl3">Antecedentes</label>
                <?php  $_smarty_tpl->tpl_vars['nota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nota']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['antecedentes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nota']->key => $_smarty_tpl->tpl_vars['nota']->value) {
$_smarty_tpl->tpl_vars['nota']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['notaId']==$_smarty_tpl->tpl_vars['nota']->value['notaId']) {?>
                         <?php $_smarty_tpl->tpl_vars["cantant"] = new Smarty_variable($_smarty_tpl->tpl_vars['cantant']->value+1, null, 0);?>
                        <div class="antecedente"><?php echo $_smarty_tpl->tpl_vars['nota']->value['texto'];?>
<label class="lbl1"> (<?php echo $_smarty_tpl->tpl_vars['nota']->value['usuario'];?>
) </label></div>
                        <?php $_smarty_tpl->tpl_vars["imgant"] = new Smarty_variable("<img src='/img/antecedente.png' width='30' height='100%' title='Visualizar u ocultar antecedentes' onclick='divshow(\"ant\",".((string)$_smarty_tpl->tpl_vars['row']->value['id']).")'> <label class='lbl1'>".((string)$_smarty_tpl->tpl_vars['cantant']->value)." antecedente/s para visualizar</label>", null, 0);?>
                    <?php }?>
                <?php } ?>
            </div>
            <div id='com<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' style='display:none'>
               <label class="lbl3">Comentarios</label>
                <?php if ($_smarty_tpl->tpl_vars['comentarios']->value) {?>
                    
                    <?php  $_smarty_tpl->tpl_vars['come'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['come']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['come']->key => $_smarty_tpl->tpl_vars['come']->value) {
$_smarty_tpl->tpl_vars['come']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['notaId']==$_smarty_tpl->tpl_vars['come']->value['notaId']) {?>
                             <?php $_smarty_tpl->tpl_vars["cantcom"] = new Smarty_variable($_smarty_tpl->tpl_vars['cantcom']->value+1, null, 0);?>
                            <div class="comentario"><?php echo $_smarty_tpl->tpl_vars['come']->value['texto'];?>
<label class="lbl1"> (<?php echo $_smarty_tpl->tpl_vars['come']->value['usuario'];?>
) <?php echo $_smarty_tpl->tpl_vars['come']->value['created'];?>
</label></div>
                            <?php $_smarty_tpl->tpl_vars["imgcom"] = new Smarty_variable("<img src='/img/comentario.png' width='30' height='100%' title='Visualizar u ocultar comentarios' onclick='divshow(\"com\",".((string)$_smarty_tpl->tpl_vars['row']->value['id']).")'><label class='lbl1'>".((string)$_smarty_tpl->tpl_vars['cantcom']->value)." comentario/s para visualizar</label>", null, 0);?>
                        <?php }?>
                    <?php } ?>
                
                <?php }?>
            </div>
                
                <?php echo $_smarty_tpl->tpl_vars['imgant']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imgcom']->value;?>

            <div class="notabtn" ><?php echo $_smarty_tpl->tpl_vars['info']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['row']->value['notaId']!=1) {?>
                    <input type="button" class="btn btn-default" style="font-size: 12px" onclick="location.href='/comentario/crear/notaId/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("comentar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Agregar Comentario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)"  <?php if ($_smarty_tpl->tpl_vars['proyecto']->value['estado']!='Desarrollo') {?><?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
<?php }?>>
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
              <?php $_smarty_tpl->tpl_vars["imgant"] = new Smarty_variable('', null, 0);?>
              <?php $_smarty_tpl->tpl_vars["imgcom"] = new Smarty_variable('', null, 0);?>
              <?php $_smarty_tpl->tpl_vars["cantcom"] = new Smarty_variable('', null, 0);?>
              <?php $_smarty_tpl->tpl_vars["cantant"] = new Smarty_variable('', null, 0);?>
            <?php } ?>
<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php }} ?>
