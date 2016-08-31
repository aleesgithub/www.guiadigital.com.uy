<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 17:27:12
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\ticket\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2715053d819e8554e40-52611277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db00c6de06e7e80855d5b0c03e1e2752fb1d6467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\ticket\\index.tpl',
      1 => 1408048031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2715053d819e8554e40-52611277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d819e857bf49_01684307',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
    'rowsE' => 0,
    'rowE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d819e857bf49_01684307')) {function content_53d819e857bf49_01684307($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_tickets");?>
</h3>

<table border="0" class="table table-hover">
  <tr>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("id");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("documento");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("evento");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("telefono");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_ticket");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("hora_evento");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("cantidad_entradas");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</strong></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr>
    <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</strong></td>
    <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['documento'];?>
</strong></td>
    <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['eventoId'];?>
</strong></td>
    
    <?php  $_smarty_tpl->tpl_vars['rowE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowsE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowE']->key => $_smarty_tpl->tpl_vars['rowE']->value) {
$_smarty_tpl->tpl_vars['rowE']->_loop = true;
?>
        
        <?php if ($_smarty_tpl->tpl_vars['rowE']->value['id']==$_smarty_tpl->tpl_vars['row']->value['eventoId']) {?>
		<td><a href="/ticket/?evento=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rowE']->value['nombre'];?>
</a></td>
	<?php }?>
        
    <?php } ?>
    
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</a></td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['fecha'],"%d/%m/%Y");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['hora'],"%H:%M:%S");?>
</a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cantentradas'];?>
</td>

  </tr>
  <?php } ?>
  
</table>

 <?php }} ?>
