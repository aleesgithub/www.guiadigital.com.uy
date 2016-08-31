<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 17:35:17
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\mail\autocomplete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1631155c0faf7430c90-03636675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a892c538313d82808d6076129b80b82e4e84bb06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\mail\\autocomplete.tpl',
      1 => 1439220907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1631155c0faf7430c90-03636675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c0faf748db96_87966248',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c0faf748db96_87966248')) {function content_55c0faf748db96_87966248($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>    
<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?><ul  id="ulautocomplete" class="autocomplete">
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
             <?php if ($_smarty_tpl->tpl_vars['row']->value['apellido']=='b') {?>
                 <?php $_smarty_tpl->tpl_vars["user"] = new Smarty_variable("Usuario no Registrado", null, 0);?>
             <?php } else { ?>
                 <?php $_smarty_tpl->tpl_vars["user"] = new Smarty_variable(smarty_modifier_capitalize(((smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['nombre'])).(' ')).($_smarty_tpl->tpl_vars['row']->value['apellido'])), null, 0);?>
             <?php }?>
             <li  onclick="addTo('<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
','<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['nombre']);?>
','<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['apellido']);?>
')" >
                <img src="/img/Icon-user.png" width='20' height='20'><a><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
&nbsp;&nbsp; <strong>&Lt;<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
&Gt;</strong></a>
            </li>       
        <?php } ?>
        <li onclick="salirautocomplete()">Salir<strong>[x]</strong></li>
    </ul>
    <?php }?>
<?php }} ?>
