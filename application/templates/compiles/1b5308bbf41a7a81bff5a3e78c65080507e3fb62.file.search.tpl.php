<?php /* Smarty version Smarty-3.1.18, created on 2014-07-26 15:15:08
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1815153c5b825ddc3d5-91994780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5308bbf41a7a81bff5a3e78c65080507e3fb62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\layout\\search.tpl',
      1 => 1406058508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1815153c5b825ddc3d5-91994780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5b825ddc3d6_36714008',
  'variables' => 
  array (
    'search' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5b825ddc3d6_36714008')) {function content_53c5b825ddc3d6_36714008($_smarty_tpl) {?><form action="" method="get" class="form-inline">
  <label for="textfield"></label>
  <input type="text" name="search" id="search" value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" class="form-control" />
  <input type="submit" name="button" id="button" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('search');?>
" class="btn btn-default" />
</form><?php }} ?>
