<?php /* Smarty version Smarty-3.1.18, created on 2014-07-20 16:09:18
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:705553cbcd8ec90016-79598045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541fd2f0a21d96429466922e2bc839cf77d46376' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\user\\index.tpl',
      1 => 1402439884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '705553cbcd8ec90016-79598045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53cbcd8f3bb124_45612013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cbcd8f3bb124_45612013')) {function content_53cbcd8f3bb124_45612013($_smarty_tpl) {?><h1>Listado de Usuarios</h1>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="170">Nombre</th>
    <th width="180">Apellido</th>
    <th width="248">Email</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
</td>
    <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</a></td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
