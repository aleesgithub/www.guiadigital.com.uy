<?php /* Smarty version Smarty-3.1.18, created on 2015-04-23 15:19:09
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\layout\submenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228425537d16490f837-42224148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd503e20208a5083b39f588fa0003425029052f2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\layout\\submenu.tpl',
      1 => 1429795020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228425537d16490f837-42224148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5537d16493fe71_63671909',
  'variables' => 
  array (
    'user_data' => 0,
    'proyecto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537d16493fe71_63671909')) {function content_5537d16493fe71_63671909($_smarty_tpl) {?>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
        <ul>
            <li><a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
&nombre=validaci&oacute;n">Validaci&oacute;n</a></li>
            <li><a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
&nombre=verificaci&oacute;n"">Verificaci&oacute;n</a></li>
            <li><a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
&nombre=revisi&oacute;n"">Registro de Revisi&oacute;n</a></li>
        </ul>
    <?php }?>


<?php }} ?>
