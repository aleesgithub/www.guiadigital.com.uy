<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 02:56:23
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\pin\solicitar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3095753bc9337174df6-81076945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece2aae74c49cb2c6b0fd2c6a6a2c45b9d98e026' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\pin\\solicitar.tpl',
      1 => 1404867257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3095753bc9337174df6-81076945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'token' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc93371b1cf0_74325395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc93371b1cf0_74325395')) {function content_53bc93371b1cf0_74325395($_smarty_tpl) {?><h1>Ingresar PIN</h1>
<form action="/pin/solicitar/token/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Pin(*):</td>
    <td><input name="pin" type="text" id="pin" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['pin'];?>
" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Enviar" /></td>
  </tr>
  <tr>
    <td colspan="2">* Campos obligatorios</td>
    </tr>
</table>
</form><?php }} ?>
