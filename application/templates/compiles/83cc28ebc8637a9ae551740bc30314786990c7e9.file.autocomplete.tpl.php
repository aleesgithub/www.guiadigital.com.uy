<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:51:02
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\empresa\autocomplete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:779657c5d59625e154-28496409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83cc28ebc8637a9ae551740bc30314786990c7e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\empresa\\autocomplete.tpl',
      1 => 1442439824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '779657c5d59625e154-28496409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subrubro' => 0,
    'rows' => 0,
    'row' => 0,
    'rubro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5d596294198_07859694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5d596294198_07859694')) {function content_57c5d596294198_07859694($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>    <ul  id="ulautocomplete" class="autocomplete">
        <li  onclick="addRubro('<?php echo $_smarty_tpl->tpl_vars['subrubro']->value;?>
','0')" >
                <img src="/img/Icon-user.png" width='20' height='20'><a><?php echo $_smarty_tpl->tpl_vars['subrubro']->value;?>
&nbsp;&nbsp; <strong>&Lt;Otros&Gt;</strong></a>
            </li>
        
<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
             <?php if ($_smarty_tpl->tpl_vars['row']->value['id']==0) {?>
                 <?php $_smarty_tpl->tpl_vars["rubro"] = new Smarty_variable("Rubro no Registrado", null, 0);?>
             <?php } else { ?>
                 <?php $_smarty_tpl->tpl_vars["rubro"] = new Smarty_variable(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['subrubro']), null, 0);?>
             <?php }?>
             <li  onclick="addRubro('<?php echo $_smarty_tpl->tpl_vars['row']->value['subrubro'];?>
','<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')" >
                <img src="/img/Icon-user.png" width='20' height='20'><a><?php echo $_smarty_tpl->tpl_vars['row']->value['rubro'];?>
&nbsp;&nbsp; <strong>&Lt;<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['rubro']->value);?>
&Gt;</strong></a>
            </li>       
        <?php } ?>
        <li onclick="salirautocomplete()">Salir<strong>[x]</strong></li>
    
    <?php }?>
</ul><?php }} ?>
