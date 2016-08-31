<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 00:43:59
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\producto\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054753c5aeaf905923-65633794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7c805e955b07fa46708d08b68d57b5777ae079b' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\producto\\actualizar.tpl',
      1 => 1405457646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1054753c5aeaf905923-65633794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'id' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5aeaf97eab2_73791423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5aeaf97eab2_73791423')) {function content_53c5aeaf97eab2_73791423($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("update_product");?>
</h1>
<form action="/producto/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("name");?>
(*):</td>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("desc");?>
:</td>
    <td><input name="descripcion" type="text" id="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
" /></td>
  </tr>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("price");?>
(*):</td>
    <td><input name="precio" type="text" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['precio'];?>
" /></td>
  </tr>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("image");?>
:</td>
    <td><label for="imagen"></label>
      <input type="file" name="imagen" id="imagen" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('send');?>
" class="btn btn-default" /></td>
  </tr>
  <tr>
    <td colspan="2">* <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("required_fields");?>
</td>
    </tr>
</table>
</form><?php }} ?>
