<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 03:16:07
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\frontend\afiche\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1559853c5d2576b03d1-24065196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cde9c7b42f93c8457fec66d1530c513e7279bddc' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\frontend\\afiche\\index.tpl',
      1 => 1405472752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1559853c5d2576b03d1-24065196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'P' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5d2576e3058_47945838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5d2576e3058_47945838')) {function content_53c5d2576e3058_47945838($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['P']->value['nombre'];?>
</h1>
<h1><?php echo $_smarty_tpl->tpl_vars['P']->value['precio'];?>
</h1>
<img src="/uploads/<?php echo $_smarty_tpl->tpl_vars['P']->value['imagen'];?>
" /> <?php }} ?>
