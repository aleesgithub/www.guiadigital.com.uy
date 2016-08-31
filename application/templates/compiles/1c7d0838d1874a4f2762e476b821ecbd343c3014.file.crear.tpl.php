<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 23:10:02
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\sector\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2694153d87879aae896-93482915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7d0838d1874a4f2762e476b821ecbd343c3014' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\sector\\crear.tpl',
      1 => 1407982201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2694153d87879aae896-93482915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d87879b5cf28_30434049',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'lugares' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d87879b5cf28_30434049')) {function content_53d87879b5cf28_30434049($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_sector");?>
</h2>

<form action="/sector/crear/" method="post">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    <tr>
    <td align="right">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
    </td>
    <td align="left">
        <input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
    </td>
  </tr>
  <tr>
    <td  align="right">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("capacidad");?>
 (*)</strong>
    </td>
    <td align="left">
        <input name="capacidad" type="int" id="capacidad" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['capacidad'];?>
" />
    </td>
  </tr>
  <tr>
    <td  align="right">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("pertenece_lugar");?>
 (*)</strong>
    </td>
    <td align="left">
        <select name=lugarId><option>-- <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_lugar");?>
 --</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lugares']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['lugarId']),$_smarty_tpl);?>
</select>
    </td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
  </tr>
</table>
</form>
<?php }} ?>
