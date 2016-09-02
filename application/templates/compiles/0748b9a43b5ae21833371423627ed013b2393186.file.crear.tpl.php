<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 19:14:36
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\user\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2929657c6054c4c2cb8-32458572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0748b9a43b5ae21833371423627ed013b2393186' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\user\\crear.tpl',
      1 => 1472320658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2929657c6054c4c2cb8-32458572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'language_options' => 0,
    'roles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c6054c501a08_42221744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6054c501a08_42221744')) {function content_57c6054c501a08_42221744($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_usuario");?>
</h3>

<form action="/user/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    <tr>
        
        
    </tr>  
    <tr>
        <td width="10%">  
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
        </td>
        <td width="40%">
            <input class="text" name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
        </td>
        <td width="10%">
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("apellido");?>
 (*)</strong>
        </td>
        <td width="40%">
            <input class="text" name="apellido" type="text" id="apellido" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['apellido'];?>
" />
        </td>
    </tr>
    <tr>
        <td >
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("user");?>
 (*)</strong>
        </td>
        <td >
            <input class="text" name="usr" type="text" id="usr" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['usr'];?>
" />
        </td>
        <td>
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("password");?>
 (*)</strong>
        </td>
        <td>
            <input class="text" name="pwd" type="password" id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['pwd'];?>
" />    
        </td>    
           
    </tr>
    <tr>
        <td>
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("mail");?>
 (*)</strong>
        </td>
        <td>
            <input class="text" name="email" type="text" id="email" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['email'];?>
" />
        <td>
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("idioma");?>
 (*)</strong>
        </td>
        <td>
            <select class="text" name=language><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['language']),$_smarty_tpl);?>
</select>
        </td>
    </tr> 
    <tr>
        <td >
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</strong>
        </td>
        <td >
            <input class="btn" type="file" name="imagen" id="imagen" />
        </td>
        <td>    
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("rol");?>
 (*)</strong>
        </td>
        <td>
            <select class="text" name=role><option>-- <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_rol");?>
 --</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['roles']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['role']),$_smarty_tpl);?>
</select>
        </td> 
    </tr>
    <tr>
        <td align="center" colspan="4"><input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
    </tr>
    <tr>
        <td align="center" colspan="4"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
    </tr>
</table>
</form><?php }} ?>
