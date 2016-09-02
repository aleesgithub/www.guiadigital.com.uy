<?php /* Smarty version Smarty-3.1.18, created on 2016-08-31 16:15:49
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3161057c6e69521ada4-67336298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5dea81119fdc5c05c41a02b3c73ca30e0c2f227' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\search.tpl',
      1 => 1441221959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3161057c6e69521ada4-67336298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nomparam' => 0,
    'valparam' => 0,
    'search' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c6e695221663_71782911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6e695221663_71782911')) {function content_57c6e695221663_71782911($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>
            
<div>
    
    <form class="formsearch" action='' method='get'>
        <img src="/img/logo.png" width="40px" style="float: left">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['nomparam']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['nomparam']->value;?>
" value = "<?php echo $_smarty_tpl->tpl_vars['valparam']->value;?>
" class="text" />
        <input type="text" placeholder="ingresar empresa, rubro o lo que desee buscar ..." required name='search' value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
        <button type="submit" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_('buscar'));?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_('buscar'));?>
</buscar>
    </form>
</div><?php }} ?>
