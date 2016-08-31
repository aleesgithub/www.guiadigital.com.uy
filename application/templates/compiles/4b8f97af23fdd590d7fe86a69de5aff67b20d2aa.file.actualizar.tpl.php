<?php /* Smarty version Smarty-3.1.18, created on 2014-08-12 12:15:26
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\categoria\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1732053d9a49f377572-53538066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b8f97af23fdd590d7fe86a69de5aff67b20d2aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\categoria\\actualizar.tpl',
      1 => 1407856525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732053d9a49f377572-53538066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9a49f3c5773_64281702',
  'variables' => 
  array (
    'Tr' => 0,
    'id' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9a49f3c5773_64281702')) {function content_53d9a49f3c5773_64281702($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_categoria");?>
</h2>

<form action="/categoria/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
      <td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
(*)</strong></td>
    <td width="55%"><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
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
