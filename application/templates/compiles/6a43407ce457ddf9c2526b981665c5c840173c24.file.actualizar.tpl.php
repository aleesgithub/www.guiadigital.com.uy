<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 15:14:54
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\user\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2209753e27e0f0fd3f0-43605006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a43407ce457ddf9c2526b981665c5c840173c24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\user\\actualizar.tpl',
      1 => 1407953693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2209753e27e0f0fd3f0-43605006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53e27e0f1a34c3_28149364',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'row' => 0,
    'id' => 0,
    'role_options' => 0,
    'role' => 0,
    'language_options' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e27e0f1a34c3_28149364')) {function content_53e27e0f1a34c3_28149364($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['model']->value['usr'];?>
) <a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['model']->value['imagen'];?>
"/></a></h2>

<form action="/user/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
    <td colspan="2">  
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
        <input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
    </td>
    <td width="50%">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("password");?>
 (*)</strong>
        <input name="pwd" type="password" id="pwd" value="<?php echo substr($_smarty_tpl->tpl_vars['model']->value['pwd'],0,0);?>
" />    
    </td>
  </tr>
  <tr>
    <td colspan="2">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("apellido");?>
 (*)</strong>
        <input name="apellido" type="text" id="apellido" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['apellido'];?>
" />
    </td>    
    <td>    
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("rol");?>
 (*)</strong>
        <select name=role><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['role_options']->value,'selected'=>$_smarty_tpl->tpl_vars['role']->value),$_smarty_tpl);?>
</select>
    </td>    
  </tr>
  <tr>
    <td colspan="2">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("mail");?>
 (*)</strong>
        <input name="email" type="text" id="email" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['email'];?>
" />
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("idioma");?>
 (*)</strong>
        <select name=language><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language']->value),$_smarty_tpl);?>
</select>
    </td>
  </tr>  
  <tr>
    <td colspan="2" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("cambiar_imagen");?>
</strong>
    </td>
    <td>
        <label for="imagen"></label><input type="file" name="imagen" id="imagen" />
    </td>
  </tr>  
  <tr>
    <td align="center" colspan="3"><input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
  </tr>
  <tr>
    <td align="center" colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
  </tr>
</table>
</form>
<?php }} ?>
