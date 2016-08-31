<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:25
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2974253d4a092bfc8e1-42946597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21fd7ffe290766bb3b35930c06dc4e2ed7240e7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\layout\\search.tpl',
      1 => 1407805888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2974253d4a092bfc8e1-42946597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d4a092bfc8e9_00419698',
  'variables' => 
  array (
    'search' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4a092bfc8e9_00419698')) {function content_53d4a092bfc8e9_00419698($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><form action="" method="get" class="form-inline">
  <label for="textfield"></label>
  <input type="text" name="search" id="search" value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" class="form-control" />
  <input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_('buscar'));?>
" class="btn btn-default" />
</form><?php }} ?>
