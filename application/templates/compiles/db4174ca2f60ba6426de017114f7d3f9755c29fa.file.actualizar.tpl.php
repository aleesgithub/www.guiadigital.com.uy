<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 18:03:23
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\espectaculo\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2907053d9a9a0759f57-22489891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4174ca2f60ba6426de017114f7d3f9755c29fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\espectaculo\\actualizar.tpl',
      1 => 1408045109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2907053d9a9a0759f57-22489891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9a9a07f6350_56923512',
  'variables' => 
  array (
    'Tr' => 0,
    'id' => 0,
    'model' => 0,
    'categorias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9a9a07f6350_56923512')) {function content_53d9a9a07f6350_56923512($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_espectaculo");?>
</h3>

<form action="/espectaculo/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
      <td width="35%" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
(*)</strong></td>

    <td  colspan="2" width="65%"><input name="nombre" type="text" id="nombre" size="70" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  <tr>
      <td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("descripcion");?>
</strong></td>

    <td colspan="2"><textarea name="descripcion" type="textarea" id="descripcion" cols="70" rows="5"><?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
</textarea></td>
  </tr>
   <tr>
       <td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("categoria");?>
</strong></td>

       <td colspan="2"><select name=categoriaId><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categorias']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['categoriaId']),$_smarty_tpl);?>
</select></td>
  </tr>
  <tr>
    <td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</strong></td>
    <td><a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['model']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['model']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
" /></a></td>
    <td><label for="imagen"></label><input type="file" name="imagen" id="imagen" /></td>
  </tr>
  <tr>

    
    <td colspan="3" align="center"><input type="submit" name="button" id="button" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('send');?>
" class="btn btn-default" /></td>
  </tr>
  <tr>
    
    <td colspan="3" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
    </tr>
</table>
</form><?php }} ?>
