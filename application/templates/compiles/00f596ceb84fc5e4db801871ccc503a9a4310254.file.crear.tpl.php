<?php /* Smarty version Smarty-3.1.18, created on 2015-07-07 17:44:44
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\nota\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1524854ac03fcb6f4d1-62886291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00f596ceb84fc5e4db801871ccc503a9a4310254' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\nota\\crear.tpl',
      1 => 1436283734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1524854ac03fcb6f4d1-62886291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54ac03fcc28799_14265632',
  'variables' => 
  array (
    'Tr' => 0,
    'proyecto' => 0,
    'model' => 0,
    'table_options' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ac03fcc28799_14265632')) {function content_54ac03fcc28799_14265632($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Nueva NOTA");?>
 : <a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</a></h3>
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="/nota/crear/" onsubmit="setTexto()" method="post"  enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['proyectoId'];?>
" />

<table  border="0" width="80%">     
    <tr>
      <td colspan="2">  
          <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
     
          <input class="text" name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
          
      </td>
       <td>
          <strong>Acceso(*)</strong>
           <select class="text" name="acceso"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['table_options']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['acceso']),$_smarty_tpl);?>
</select>
      </td>
    </tr>
    <tr>
      <td colspan="2">  
          &nbsp;
      </td>
      <td>
          <input class="text" name="usuario" type="hidden" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
"/> 
      </td>
    </tr>
    <tr>
      <td colspan="3">
          <!--<textarea class="text" name="texto" cols="100" rows="10" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['texto'];?>
"></textarea>-->
          <textarea id="texto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="texto" class="text"  value="<?php echo $_smarty_tpl->tpl_vars['model']->value['texto'];?>
" ></textarea>
          
          <iframe id="edit" class="textiframe">Tu navegador no es compatible con Sysav</iframe>
          <iframe id="colorpalette" src="/img/colors.html" style="visibility: hidden; position: absolute; left: 406px; top: 205px;" height="170" width="80%"></iframe>
      </td>
    </tr>
    <tr>
        
        <td align="left" colspan="3"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>

          <input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" />
          <input class="btn" type="button" onclick="location.href='/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
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
</form><?php }} ?>
