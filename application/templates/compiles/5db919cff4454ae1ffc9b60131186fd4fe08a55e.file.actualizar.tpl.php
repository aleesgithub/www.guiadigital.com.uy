<?php /* Smarty version Smarty-3.1.18, created on 2015-02-05 15:13:07
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\comunicado\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2518454b0624da807d8-30983674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5db919cff4454ae1ffc9b60131186fd4fe08a55e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\comunicado\\actualizar.tpl',
      1 => 1423145583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2518454b0624da807d8-30983674',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b0624daf0978_83007271',
  'variables' => 
  array (
    'Tr' => 0,
    'proyecto' => 0,
    'model' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b0624daf0978_83007271')) {function content_54b0624daf0978_83007271($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Actualizar Comunicado");?>
 : <a href="/comunicado/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</a></h3>
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="/comunicado/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
/" onsubmit="setTexto()" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['proyectoId'];?>
" />
<input class="text" name="usuario" type="hidden" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
" size="100%" height="50px"/> 
<textarea  id="texto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="texto"><?php echo $_smarty_tpl->tpl_vars['model']->value['texto'];?>
</textarea>
<iframe id="edit" class="textiframe">Tu navegador no es compatible con Sysav</iframe>
<iframe id="colorpalette" src="/img/colors.html" style="visibility: hidden; position: absolute; left: 406px; top: 205px;" height="170" width="250"></iframe>
<br>
<input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("enviar"));?>
" />
<input class="btn" type="button" onclick="location.href='/comunicado/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
<br><br>
<input onClick="viewsource(this.checked)" type="checkbox">
View HTML Source
<input checked="checked"  onClick="usecss(this.checked)" type="checkbox">
Use CSS
<input onClick="readonly(this.checked)" type="checkbox">
Read only
</form><?php }} ?>
