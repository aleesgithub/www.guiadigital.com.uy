<?php /* Smarty version Smarty-3.1.18, created on 2015-01-19 21:06:17
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\evaluacion\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3091254b7eb3ee99674-54295991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c34dcb2bde6e2f6ff036e95c251da337a1876476' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\evaluacion\\crear.tpl',
      1 => 1421697930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3091254b7eb3ee99674-54295991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b7eb3eee7174_72951612',
  'variables' => 
  array (
    'proyecto' => 0,
    'model' => 0,
    'user_data' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b7eb3eee7174_72951612')) {function content_54b7eb3eee7174_72951612($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><label class="lbl1">Visualizar evaluaciones del <?php echo $_smarty_tpl->tpl_vars['proyecto']->value['tipo'];?>
 <a href="/evaluacion/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</a></label>

<form action="/evaluacion/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['proyectoId'];?>
" />

<table  border="0"  >     
    <tr>
        <td width="10%"><label class="lbl2">Evaluaci&oacute;n:</label>
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

            <input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" />
            <input class="btn" type="button" onclick="location.href='/evaluacion/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
        </td>
    </tr>
    
</table>
</form><?php }} ?>
