<?php /* Smarty version Smarty-3.1.18, created on 2015-06-23 22:45:19
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\pregunta\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1845854ae03925ebc00-99366198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5ce80ab9e658bc381f5661fd736d05975a75da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\pregunta\\index.tpl',
      1 => 1435092315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1845854ae03925ebc00-99366198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54ae03926a31f8_55321859',
  'variables' => 
  array (
    'controller' => 0,
    'proyecto' => 0,
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
    'respuestas' => 0,
    'res' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ae03926a31f8_55321859')) {function content_54ae03926a31f8_55321859($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
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


<table width="100%">
    <tr>
        <td width="50%"><input type="button" class="btn btn-default" onclick="location.href='/pregunta/crear/proyectoId/<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Formular Pregunta");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Formular Pregunta");?>
"></td>
        <td><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
    </tr>
</table>
  

    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["respuesta"] = new Smarty_variable(false, null, 0);?> 
        <div class="globpreg"> 
            <?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>
&nbsp;<label class='lbl1'>(<?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
)</label>
            
        </div><br>
        <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['respuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['row']->value['id']==$_smarty_tpl->tpl_vars['res']->value['preguntaId']) {?>
                
                <?php $_smarty_tpl->tpl_vars["respuesta"] = new Smarty_variable(true, null, 0);?> 
                
                <?php if ($_smarty_tpl->tpl_vars['res']->value['texto']!='') {?>
                    <div class="globresp" > 
                        <?php echo $_smarty_tpl->tpl_vars['res']->value['texto'];?>
&nbsp;<label class='lbl1' >(<?php echo $_smarty_tpl->tpl_vars['res']->value['usuario'];?>
)</label>
                    </div>
                    <br>
                <?php } else { ?>
                    <div class="globresp"> 
                        <lable class='lbl1'>Respuesta asignada al usuario: </lable><?php echo $_smarty_tpl->tpl_vars['res']->value['usuario'];?>

                        <?php if ($_smarty_tpl->tpl_vars['res']->value['usuario']==$_smarty_tpl->tpl_vars['user_data']->value->usr) {?>
                        
                           <input type="button" class="btn" onclick="location.href='/pregunta/responder/?preguntaId=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("responder"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Responder Pregunta");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
                           <input type="button" class="btn btn-default" onclick="return confirmar('/pregunta/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar esta pregunta?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_Pregunta");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
                        <?php }?>
                    </div><br>
                <?php }?>
            <?php }?>
        <?php } ?>
        
        
    <?php } ?>

<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php }} ?>
