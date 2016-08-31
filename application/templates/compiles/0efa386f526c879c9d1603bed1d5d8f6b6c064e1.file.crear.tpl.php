<?php /* Smarty version Smarty-3.1.18, created on 2014-08-12 12:16:31
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\categoria\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404353d9a48a00c163-63798381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0efa386f526c879c9d1603bed1d5d8f6b6c064e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\categoria\\crear.tpl',
      1 => 1407856590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404353d9a48a00c163-63798381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9a48a05a362_06613523',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9a48a05a362_06613523')) {function content_53d9a48a05a362_06613523($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_categoria");?>
</h2>

<form action="/categoria/crear/" method="post">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
      <td align="right" width="45%"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong></td>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" class="btn btn-default"/></td>
  </tr>
  <tr>
      <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
    </tr>
</table>
</form><?php }} ?>
