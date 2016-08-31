<?php /* Smarty version Smarty-3.1.18, created on 2014-07-26 22:58:48
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\espectaculo\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2014953cfe4f0d76934-42251538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c693df50100e197746ee998062fd858f0c3ac079' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\espectaculo\\crear.tpl',
      1 => 1406150590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2014953cfe4f0d76934-42251538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53cfe4f0da6305_67991604',
  'variables' => 
  array (
    'model' => 0,
    'categorias' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cfe4f0da6305_67991604')) {function content_53cfe4f0da6305_67991604($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><h1>Agregar Espectaculo</h1>
<form action="/espectaculo/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Nombre(*):</td>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  <tr>
      <td>Descripci&oacute;n(*):</td>
    <td><input name="descripcion" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
" /></td>
  </tr>
   <tr>
       <td>Categor&iacute;a:</td>
    <td><select name=categoriaId>
   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categorias']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['categoriaId']),$_smarty_tpl);?>

</select></td>
  </tr>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("image");?>
:</td>
    <td><label for="imagen"></label>
      <input type="file" name="imagen" id="imagen" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Enviar" /></td>
  </tr>
  <tr>
    <td colspan="2">* Campos obligatorios</td>
    </tr>
</table>
</form><?php }} ?>
