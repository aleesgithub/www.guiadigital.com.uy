<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 00:39:59
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\login\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1870553c5adbf247f91-58696386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a916d4a4b154fa2b204e791172f0688c78ea70' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\login\\login\\index.tpl',
      1 => 1404071548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1870553c5adbf247f91-58696386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usr' => 0,
    'pwd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5adbf25b813_71418266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5adbf25b813_71418266')) {function content_53c5adbf25b813_71418266($_smarty_tpl) {?><h1>Login de Usuario</h1>
<form action="/login/" method="post">
<input type="hidden" name="do_submit" value="134" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Usuario:</td>
    <td><input name="usr" type="text" id="usr" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="pwd" type="password" id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Enviar" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
</table>
</form><?php }} ?>
