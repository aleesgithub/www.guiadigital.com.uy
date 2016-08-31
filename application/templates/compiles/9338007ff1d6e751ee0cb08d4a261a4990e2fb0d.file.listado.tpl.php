<?php /* Smarty version Smarty-3.1.18, created on 2014-07-22 23:50:59
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\frontend\categoria\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134053cedcc3393dd5-47678446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9338007ff1d6e751ee0cb08d4a261a4990e2fb0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\frontend\\categoria\\listado.tpl',
      1 => 1406065845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134053cedcc3393dd5-47678446',
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
  'unifunc' => 'content_53cedcc340b300_04304004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cedcc340b300_04304004')) {function content_53cedcc340b300_04304004($_smarty_tpl) {?><h1>Listado de Categor&iacute;as</h1>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="170">Nombre</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr>
    <td><a href="?controller=evento&action=listar&categoria=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="Ver Eventos de <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
