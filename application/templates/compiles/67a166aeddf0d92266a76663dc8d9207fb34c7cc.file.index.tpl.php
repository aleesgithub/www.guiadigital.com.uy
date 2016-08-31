<?php /* Smarty version Smarty-3.1.18, created on 2014-07-29 18:52:36
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\afiche\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3117253d817a42280d2-48997884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67a166aeddf0d92266a76663dc8d9207fb34c7cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\afiche\\index.tpl',
      1 => 1405472754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3117253d817a42280d2-48997884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'P' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d817a42280d9_33800930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d817a42280d9_33800930')) {function content_53d817a42280d9_33800930($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['P']->value['nombre'];?>
</h1>
<h1><?php echo $_smarty_tpl->tpl_vars['P']->value['precio'];?>
</h1>
<img src="/uploads/<?php echo $_smarty_tpl->tpl_vars['P']->value['imagen'];?>
" /> <?php }} ?>
