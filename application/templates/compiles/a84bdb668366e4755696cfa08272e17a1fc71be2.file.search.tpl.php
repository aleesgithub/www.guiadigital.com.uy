<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 01:24:59
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:884953c5adc6b75542-01881101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84bdb668366e4755696cfa08272e17a1fc71be2' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\layout\\search.tpl',
      1 => 1405466660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884953c5adc6b75542-01881101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5adc6b88dc3_81701432',
  'variables' => 
  array (
    'search' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5adc6b88dc3_81701432')) {function content_53c5adc6b88dc3_81701432($_smarty_tpl) {?><form action="" method="get" class="form-inline">
  <label for="textfield"></label>
  <input type="text" name="search" id="search" value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" class="form-control" />
  <input type="submit" name="button" id="button" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('search');?>
" class="btn btn-default" />
</form><?php }} ?>
