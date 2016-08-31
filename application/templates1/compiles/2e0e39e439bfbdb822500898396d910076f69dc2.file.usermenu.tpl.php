<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 23:25:27
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\usermenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2550057aa4a4745b795-76697443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e0e39e439bfbdb822500898396d910076f69dc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\usermenu.tpl',
      1 => 1470765548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2550057aa4a4745b795-76697443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'proyecto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa4a474716b7_63141339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa4a474716b7_63141339')) {function content_57aa4a474716b7_63141339($_smarty_tpl) {?>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role) {?>
        <img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['user_data']->value->imagen;?>
" title="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['user_data']->value->apellido;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['user_data']->value->apellido;?>
" /><span><?php echo $_smarty_tpl->tpl_vars['user_data']->value->nombre;?>
</span>
        <ul>
            <li><a href="/empresa/crear/">Agregar Empresa</a></li>
            <li><a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
&nombre=verificaci&oacute;n"">Administrar</a></li>
            <li><a href="/login/logout/">Cerrar Sesi&oacute;n</a></li>
        </ul>
    <?php }?>


<?php }} ?>
