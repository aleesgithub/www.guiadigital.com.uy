<?php /* Smarty version Smarty-3.1.18, created on 2015-08-20 20:41:55
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\mail\autocomplete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1157255d61f735b8681-22303907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c272d01101bcaaca843e1b663fdc447d8308a3f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\mail\\autocomplete.tpl',
      1 => 1439220907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157255d61f735b8681-22303907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61f7360d5b4_21828671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61f7360d5b4_21828671')) {function content_55d61f7360d5b4_21828671($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
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
