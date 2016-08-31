<?php /* Smarty version Smarty-3.1.18, created on 2015-01-16 20:19:54
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\pregunta\responder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699554b56f77aa7ee9-45613756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a268be6dcd0934287d3497966c94cd006a4ab6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\pregunta\\responder.tpl',
      1 => 1421435991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1699554b56f77aa7ee9-45613756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b56f77b09123_33602656',
  'variables' => 
  array (
    'proyecto' => 0,
    'respuesta' => 0,
    'pregunta' => 0,
    'user_data' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b56f77b09123_33602656')) {function content_54b56f77b09123_33602656($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><label class="lbl1">Visualizar preguntas de desarrollo del <?php echo $_smarty_tpl->tpl_vars['proyecto']->value['tipo'];?>
 <a href="/pregunta/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</a></label>

<form action="/pregunta/responder/id/<?php echo $_smarty_tpl->tpl_vars['respuesta']->value['id'];?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />


<table  border="0"  >     
    <tr>
        <td width="10%">
            <label>Referente a:</label>
        </td>
        <td width="90%">
            <label class="lbl3" ><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['tipo'];?>
-<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</label>
        </td>
    </tr>
    <tr>
        <td width="10%">
            <label class="lbl2">Pregunta:</label>
        </td>
        <td width="90%">
            <div class="globpreg" style="width: 60%; background-color: #dde9af"><?php echo $_smarty_tpl->tpl_vars['pregunta']->value['texto'];?>
</div>
      </td>
    </tr>
    <tr>
        <td width="10%">
            <label class="lbl2">Respuesta:</label>
        </td>
        <td width="90%">
          
        </td>
    </tr>
    <tr>
        <td colspan="2">  
            <label class="lbl1" style="font-size: 12px; color: #0000ff">(Escriba su respuesta en la siguiente &aacute;rea de texto)</label>
            <input  name="usuario" type="hidden" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
"/> 
            <input  name="proyectoId" type="hidden" id="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"/>
            <input  name="preguntaId" type="hidden" id="preguntaId" value="<?php echo $_smarty_tpl->tpl_vars['pregunta']->value['id'];?>
"/>
        </td>
    </tr>
    <tr>
      <td colspan="2">
          <textarea class="text" name="texto" cols="100" rows="10"><?php echo $_smarty_tpl->tpl_vars['respuesta']->value['texto'];?>
</textarea>
      </td>
    </tr>
   
    <tr>
      <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>

          <input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("enviar"));?>
" />
          <input class="btn" type="button" onclick="location.href='/pregunta/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
      </td>
    </tr>
    
</table>
</form><?php }} ?>
