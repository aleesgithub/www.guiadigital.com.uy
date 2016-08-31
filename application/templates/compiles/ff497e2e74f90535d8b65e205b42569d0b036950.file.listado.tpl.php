<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 16:41:18
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\categoria\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84453d92634517290-80074100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff497e2e74f90535d8b65e205b42569d0b036950' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\categoria\\listado.tpl',
      1 => 1408044984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84453d92634517290-80074100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d92634565490_03045146',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d92634565490_03045146')) {function content_53d92634565490_03045146($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_categorias");?>
</h3>

<table width="612" border="0" class="table table-hover">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr>
    <td align="center"><a href="/espectaculo/listado/?categoria=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("ver_categoria");?>
 : <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
  </tr>
  <?php } ?>
</table>
<?php }} ?>
