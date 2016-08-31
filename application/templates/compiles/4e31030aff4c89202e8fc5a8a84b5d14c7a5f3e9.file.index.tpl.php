<?php /* Smarty version Smarty-3.1.18, created on 2014-07-20 18:01:29
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\frontend\afiche\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2500353cbe7d9954314-72450665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e31030aff4c89202e8fc5a8a84b5d14c7a5f3e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\frontend\\afiche\\index.tpl',
      1 => 1405472754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2500353cbe7d9954314-72450665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'P' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53cbe7d996f8a7_98514475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cbe7d996f8a7_98514475')) {function content_53cbe7d996f8a7_98514475($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['P']->value['nombre'];?>
</h1>
<h1><?php echo $_smarty_tpl->tpl_vars['P']->value['precio'];?>
</h1>
<img src="/uploads/<?php echo $_smarty_tpl->tpl_vars['P']->value['imagen'];?>
" /> <?php }} ?>
