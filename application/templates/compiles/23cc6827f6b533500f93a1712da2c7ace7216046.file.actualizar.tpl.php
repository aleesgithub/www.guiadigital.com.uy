<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 09:52:16
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\lugar\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2640453d9ab3b7bcf96-54005922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23cc6827f6b533500f93a1712da2c7ace7216046' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\lugar\\actualizar.tpl',
      1 => 1407934334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2640453d9ab3b7bcf96-54005922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9ab3b816d28_58435016',
  'variables' => 
  array (
    'Tr' => 0,
    'id' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9ab3b816d28_58435016')) {function content_53d9ab3b816d28_58435016($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_lugar");?>
</h2>

<form action="/lugar/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
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
 (*)</strong>
        <input name="direccion" type="text" id="direccion" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['direccion'];?>
" /></td>
    </td>
  </tr>
  <tr>
    <td align="center">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("telefono");?>
 (*)</strong>
        <input name="telefono" type="text" id="direccion" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['telefono'];?>
" /></td>
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
