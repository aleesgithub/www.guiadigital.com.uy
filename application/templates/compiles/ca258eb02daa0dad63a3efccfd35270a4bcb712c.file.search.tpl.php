<?php /* Smarty version Smarty-3.1.18, created on 2014-08-11 22:11:33
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1541953e6ce06d7e224-27789078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca258eb02daa0dad63a3efccfd35270a4bcb712c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\layout\\search.tpl',
      1 => 1407805886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1541953e6ce06d7e224-27789078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53e6ce06da5327_28507887',
  'variables' => 
  array (
    'search' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e6ce06da5327_28507887')) {function content_53e6ce06da5327_28507887($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><form action="" method="get" class="form-inline">
  <label for="textfield"></label>
  <input type="text" name="search" id="search" value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" class="form-control" />
  <input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_('buscar'));?>
" class="btn btn-default" />
</form><?php }} ?>
