<?php /* Smarty version Smarty-3.1.18, created on 2015-08-11 17:26:02
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\nota\listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:460955ca0fb52a52d6-90993410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d028fc348d44314227d38ec8668ac75e19966c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\nota\\listar.tpl',
      1 => 1439306207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '460955ca0fb52a52d6-90993410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ca0fb537af28_00697247',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0fb537af28_00697247')) {function content_55ca0fb537af28_00697247($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</strong>&nbsp;&nbsp;
    <label class="lbl1">Creada:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
 </label>
    <div class="nota" >
        <?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>
(<?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
)<br>
        <label class="lbl1">Acceso:</label>
        <label class="acceso">
        <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['acceso'];?>
</strong> </label><br>

    </div>
<?php } ?>
        
            
<?php }} ?>
