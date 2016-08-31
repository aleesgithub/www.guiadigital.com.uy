<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 02:23:32
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\pin\telefono.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1847453bc8b84b3a252-34550241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e66cd2a975047cee0d1f70dd53d2a34bf570577a' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\pin\\telefono.tpl',
      1 => 1404864948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1847453bc8b84b3a252-34550241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc8b84b78a57_13041919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc8b84b78a57_13041919')) {function content_53bc8b84b78a57_13041919($_smarty_tpl) {?><h1>Ingresar Telefono</h1>
<form action="/pin/telefono/" method="post">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Telefono(*):</td>
    <td><input name="telefono" type="text" id="telefono" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['telefono'];?>
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
