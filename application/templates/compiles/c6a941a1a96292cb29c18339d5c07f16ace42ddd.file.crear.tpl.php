<?php /* Smarty version Smarty-3.1.18, created on 2015-02-23 15:38:58
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\comunicado\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3272654ade4c1ab6299-93518706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a941a1a96292cb29c18339d5c07f16ace42ddd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\comunicado\\crear.tpl',
      1 => 1423145120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3272654ade4c1ab6299-93518706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54ade4c1b02bd9_72194405',
  'variables' => 
  array (
    'proyecto' => 0,
    'model' => 0,
    'user_data' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ade4c1b02bd9_72194405')) {function content_54ade4c1b02bd9_72194405($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><label class="lbl1">Visualizar comunicados del </label><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['tipo'];?>
 <a href="/comunicado/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</a>
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="/comunicado/crear/" onsubmit="setTexto()" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['proyectoId'];?>
" />

<table  border="0"  >     
    <tr>
        <td width="10%"><label class="lbl2">Comunicado:</label>
                </td>
      <td width="90%">
          
      </td>
    </tr>
     <tr>
        <td width="10%">
                </td>
      <td width="90%">
          <label class="lbl4">Asunto:</label><label class="lbl3"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['tipo'];?>
-<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</label>
      </td>
     </tr>
      <tr>
      <td colspan="2"><input class="text" name="usuario" type="hidden" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
"/> 
          <textarea id="texto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="texto" class="text"  value="<?php echo $_smarty_tpl->tpl_vars['model']->value['texto'];?>
" ></textarea>
          
          <iframe id="edit" class="textiframe">Tu navegador no es compatible con Sysav</iframe>
          <iframe id="colorpalette" src="/img/colors.html" style="visibility: hidden; position: absolute; left: 406px; top: 205px;" height="170" width="250"></iframe>

      </td>
    </tr>
    <tr>
        <td align="left" colspan="2">
            <input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("enviar"));?>
" />
            <input class="btn" type="button" onclick="location.href='/comunicado/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
        </td>
    </tr>
    
</table>
<input onClick="viewsource(this.checked)" type="checkbox">
View HTML Source
<input checked="checked"  onClick="usecss(this.checked)" type="checkbox">
Use CSS
<input onClick="readonly(this.checked)" type="checkbox">
Read only
</form>




<?php }} ?>
