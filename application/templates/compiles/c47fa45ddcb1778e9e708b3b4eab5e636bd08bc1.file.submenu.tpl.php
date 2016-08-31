<?php /* Smarty version Smarty-3.1.18, created on 2015-09-15 01:30:13
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\submenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1244855d620b1908803-65267970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c47fa45ddcb1778e9e708b3b4eab5e636bd08bc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\submenu.tpl',
      1 => 1442270952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1244855d620b1908803-65267970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d620b19124b4_61406861',
  'variables' => 
  array (
    'user_data' => 0,
    'proyecto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d620b19124b4_61406861')) {function content_55d620b19124b4_61406861($_smarty_tpl) {?>
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
