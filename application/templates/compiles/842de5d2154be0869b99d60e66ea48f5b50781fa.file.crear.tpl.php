<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 13:48:03
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\user\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1506553d9a67d0edef3-46084387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '842de5d2154be0869b99d60e66ea48f5b50781fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\user\\crear.tpl',
      1 => 1407948482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1506553d9a67d0edef3-46084387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9a67d1ad5a8_71378679',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'role_options' => 0,
    'role' => 0,
    'language_options' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9a67d1ad5a8_71378679')) {function content_53d9a67d1ad5a8_71378679($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_usuario");?>
</h2>

<form action="/user/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    <tr>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</strong>
    </td>
    <td>
        <input type="file" name="imagen" id="imagen" />
    </td>
    <td width="50%">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("user");?>
 (*)</strong>
        <input name="usr" type="text" id="usr" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['usr'];?>
" />
    </td>
  </tr>  
  <tr>
    <td colspan="2">  
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
        <input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
    </td>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("password");?>
 (*)</strong>
        <input name="pwd" type="password" id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['pwd'];?>
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
        <select name=role><option>-- <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_rol");?>
 --</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['role_options']->value,'selected'=>$_smarty_tpl->tpl_vars['role']->value),$_smarty_tpl);?>
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
    <td align="center" colspan="3"><input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
  </tr>
  <tr>
    <td align="center" colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
  </tr>
</table>
</form><?php }} ?>
