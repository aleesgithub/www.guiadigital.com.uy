<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 23:05:28
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\lugar\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1090053d8785b4723c3-65100782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4a31ae62cad67fb0b8d130219f365b047c22f63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\lugar\\crear.tpl',
      1 => 1407981921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090053d8785b4723c3-65100782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d8785b4a0704_57287471',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8785b4a0704_57287471')) {function content_53d8785b4a0704_57287471($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_lugar");?>
</h2>

<form action="/lugar/crear/" method="post">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
    <td align="center">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
        <input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
    </td>
  </tr>
  <tr>
    <td align="center">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("direccion");?>
</strong>
        <input name="direccion" type="text" id="direccion" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['direccion'];?>
" />
    </td>
  </tr>
  <tr>
    <td align="center">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("telefono");?>
</strong>
        <input name="telefono" type="text" id="direccion" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['telefono'];?>
" />
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
