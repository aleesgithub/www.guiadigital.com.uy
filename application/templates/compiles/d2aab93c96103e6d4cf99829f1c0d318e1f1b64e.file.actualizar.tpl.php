<?php /* Smarty version Smarty-3.1.18, created on 2015-07-03 17:53:38
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\evaluacion\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1817354b7ed8daf7e58-87360048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2aab93c96103e6d4cf99829f1c0d318e1f1b64e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\evaluacion\\actualizar.tpl',
      1 => 1424725965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817354b7ed8daf7e58-87360048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b7ed8dbef581_30660570',
  'variables' => 
  array (
    'id' => 0,
    'model' => 0,
    'user_data' => 0,
    'Tr' => 0,
    'proyecto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b7ed8dbef581_30660570')) {function content_54b7ed8dbef581_30660570($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>

<form action="/evaluacion/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['proyectoId'];?>
" />

<table>     
    
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
          <textarea class="text" name="texto" id="texto" cols="100" rows="10" ><?php echo $_smarty_tpl->tpl_vars['model']->value['texto'];?>
</textarea>
      </td>
    </tr>
    <tr>
      <td align="left" colspan="2">
          <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
<input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
"/>
          <input class="btn" type="button" onclick="location.href='/evaluacion/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
      </td>
    </tr>
   
</table>
</form><?php }} ?>
