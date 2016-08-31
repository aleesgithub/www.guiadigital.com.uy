<?php /* Smarty version Smarty-3.1.18, created on 2015-01-14 17:31:09
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\layout\tool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1911454b68fa9e760e8-29641980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd438f669f281b27729706a9babe9ff5c2c60b49c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\layout\\tool.tpl',
      1 => 1421253066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1911454b68fa9e760e8-29641980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b68fa9e81268_16424775',
  'variables' => 
  array (
    'proyecto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b68fa9e81268_16424775')) {function content_54b68fa9e81268_16424775($_smarty_tpl) {?><div class='tool'>
<a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><img src="/img/icoenviar.jpg" width="30" height="30"></a></li>
    <a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><img src="/img/icoimprimir.jpg" width="30" height="30"></a></li>
    <a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><img src="/img/pdf.jpg" width="30" height="30"></a></li>
<a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><img src="/img/icoactualizar.jpg" width="30" height="30"></a></li>
<a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><img src="/img/icoagenda.png" width="30" height="30"></a></li>
</div>

<?php }} ?>
