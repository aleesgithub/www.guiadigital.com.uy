<?php /* Smarty version Smarty-3.1.18, created on 2015-06-25 20:30:48
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\user\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2189953f39017351d49-55188034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6286225f2f3310b20e2e49bb6f9eb2804f35dbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\user\\actualizar.tpl',
      1 => 1435257045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2189953f39017351d49-55188034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f39017525007_07396521',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'row' => 0,
    'id' => 0,
    'user_data' => 0,
    'role_options' => 0,
    'role' => 0,
    'language_options' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f39017525007_07396521')) {function content_53f39017525007_07396521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['model']->value['usr'];?>
) <a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['model']->value['imagen'];?>
"/></a></h3>

<form action="/user/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
    <td  width="10%">  
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
        
    </td>
    <td width="40%">   
        <input class="text" name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
    </td>
    <td width="10%">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("password");?>
 (*)</strong>
         
    </td>
    <td width="40%">
        
        <input class="text" name="pwd" type="password" id="pwd" value="<?php echo substr($_smarty_tpl->tpl_vars['model']->value['pwd'],0,0);?>
" />    
    </td>
  </tr>
  <tr>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("apellido");?>
 (*)</strong>
        
    </td>
    <td>
        
        <input class="text" name="apellido" type="text" id="apellido" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['apellido'];?>
" />
    </td> 
    <td>  
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("rol");?>
 (*)</strong>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
        </td> 
        <td>    
        <select class="text" name=role><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['role_options']->value,'selected'=>$_smarty_tpl->tpl_vars['role']->value),$_smarty_tpl);?>
</select>
        <?php } else { ?>
        </td> 
        <td> 
            <label class="text"><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</label>    
            <input class="text" name="role" type="hidden" id="role" value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" />    
        <?php }?>
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
    </td>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("idioma");?>
 (*)</strong>
    </td>
    <td>
        <select class="text" name=language><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language']->value),$_smarty_tpl);?>
</select>
    </td>
  </tr>  
  <tr>
    <td colspan="2" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("cambiar_imagen");?>
</strong>
    </td>
    <td colspan="2">
        <label for="imagen"></label><input class="btn" type="file" name="imagen" id="imagen" />
    </td>
  </tr>  
  <tr>
    <td align="center" colspan="3"><input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
  </tr>
  <tr>
    <td align="center" colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
  </tr>
</table>
</form>
<?php }} ?>
