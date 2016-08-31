<?php /* Smarty version Smarty-3.1.18, created on 2015-01-13 21:01:47
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\pregunta\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2029954ae0394c9e0a2-32437928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67717605fca28f2c8b2e547483b8c3cd868578cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\pregunta\\crear.tpl',
      1 => 1421176487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2029954ae0394c9e0a2-32437928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54ae0394cebac0_18039793',
  'variables' => 
  array (
    'proyecto' => 0,
    'model' => 0,
    'usuarios' => 0,
    'user_data' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ae0394cebac0_18039793')) {function content_54ae0394cebac0_18039793($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><label class="lbl1">Visualizar preguntas de desarrollo del <?php echo $_smarty_tpl->tpl_vars['proyecto']->value['tipo'];?>
 <a href="/pregunta/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</a></label>

<form action="/pregunta/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['proyectoId'];?>
" />

<table  border="0"  >     
    <tr>
        <td width="10%"><label class="lbl2">Pregunta:</label>
                </td>
      <td width="90%">
          
      </td>
    </tr>
     <tr>
        <td width="10%"><label class="lbl4">Asunto:</label>
                </td>
      <td width="90%">
          <label class="lbl3"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['tipo'];?>
-<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</label>
      </td>
     </tr>
      <tr>
      <td align="rigth">
          <label class="lbl4">Para:</label>
      </td>
      <td>
          <select id="asignada" name="asignada" class="slt lbl2"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['usuarios']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['usuarioId']),$_smarty_tpl);?>
 </select>
      </td>
    </tr>
    <tr>
      <td>  
          &nbsp;
      </td>
      <td>
          <input class="text" name="usuario" type="hidden" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
"/> 
      </td>
    </tr>
    <tr>
      <td colspan="2">
          <textarea class="text" name="texto" cols="100" rows="10" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['texto'];?>
"></textarea>
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
