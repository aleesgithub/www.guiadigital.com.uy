<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 17:32:46
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\espectaculo\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:835953d578faab5551-84685108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5083d7f2b547f3ba19a8ea12a514939b758ec82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\espectaculo\\crear.tpl',
      1 => 1408045118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '835953d578faab5551-84685108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d578fab2a850_75147772',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'categorias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d578fab2a850_75147772')) {function content_53d578fab2a850_75147772($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_espectaculo");?>
</h3>

<form action="/espectaculo/crear/" method="post" enctype="multipart/form-data" >
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
    <td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong></td>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  <tr>
    <td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("descripcion");?>
 (*)</strong></td>
    <td><input name="descripcion" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
" /></td>
  </tr>
   <tr>
     <td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("categoria");?>
</strong></td>
    <td><select name=categoriaId>
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categorias']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['categoriaId']),$_smarty_tpl);?>

</select></td>
  </tr>
  <tr>
    <td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</strong></td>
    <td><label for="imagen"></label>
      <input type="file" name="imagen" id="imagen" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
  </tr>
  <tr>
      <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
    </tr>
</table>
</form><?php }} ?>
