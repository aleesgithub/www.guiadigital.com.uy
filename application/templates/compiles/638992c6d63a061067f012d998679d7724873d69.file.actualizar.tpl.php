<?php /* Smarty version Smarty-3.1.18, created on 2014-07-24 20:54:27
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\espectaculo\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2285853cfe54126cee3-18582197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '638992c6d63a061067f012d998679d7724873d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\espectaculo\\actualizar.tpl',
      1 => 1406228064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2285853cfe54126cee3-18582197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53cfe5412a1d82_68030791',
  'variables' => 
  array (
    'Tr' => 0,
    'id' => 0,
    'model' => 0,
    'categorias' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cfe5412a1d82_68030791')) {function content_53cfe5412a1d82_68030791($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><h1><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("update_show");?>
</h1>
<form action="/espectaculo/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  
  <tr>
    <td width="100"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("name");?>
(*):</td>
    <td width="50">&nbsp;</td>
    <td width="600"><input name="nombre" type="text" id="nombre" size="70" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("desc");?>
:</td>
    <td>&nbsp;</td>
    <td><textarea name="descripcion" type="textarea" id="descripcion" cols="70" rows="5"><?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
</textarea></td>
  </tr>
   <tr>
       <td>Categor&iacute;a:</td>
       <td>&nbsp;</td>
       <td><select name=categoriaId>   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categorias']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['categoriaId']),$_smarty_tpl);?>
</select></td>
  </tr>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("image");?>
:</td>
    <td><a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['model']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
" /></a></td>
    <td><label for="imagen"></label><input type="file" name="imagen" id="imagen" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('send');?>
" class="btn btn-default" /></td>
  </tr>
  <tr>
    <td  colspan="2">&nbsp;</td>
    <td>* <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("required_fields");?>
</td>
    </tr>
</table>
</form><?php }} ?>
