<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 17:00:30
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\lugar\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1041053d92637611463-52384272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '817569986e46f0a12d55a81b27ccc3532bb323c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\lugar\\listado.tpl',
      1 => 1408046428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1041053d92637611463-52384272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9263765f661_84552363',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9263765f661_84552363')) {function content_53d9263765f661_84552363($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_lugares");?>
</h3>

<table width="90%" border="0" class="table table-hover">
   <tr>     
    <td align="left"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</strong></td>
    <td align="left"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("direccion");?>
</strong></td>
    <td align="left"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("telefono");?>
</strong></td>
   </tr>  
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['direccion'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
    </tr>
<?php } ?>
</table>
<?php }} ?>
