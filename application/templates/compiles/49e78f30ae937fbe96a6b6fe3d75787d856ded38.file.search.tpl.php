<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:21:07
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\frontend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1856653f379739b78f5-63126085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49e78f30ae937fbe96a6b6fe3d75787d856ded38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\frontend\\layout\\search.tpl',
      1 => 1407805888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1856653f379739b78f5-63126085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f379739c09e4_48010154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f379739c09e4_48010154')) {function content_53f379739c09e4_48010154($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><form action="" method="get" class="form-inline">
  <label for="textfield"></label>
  <input type="text" name="search" id="search" value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" class="form-control" />
  <input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_('buscar'));?>
" class="btn btn-default" />
</form><?php }} ?>
