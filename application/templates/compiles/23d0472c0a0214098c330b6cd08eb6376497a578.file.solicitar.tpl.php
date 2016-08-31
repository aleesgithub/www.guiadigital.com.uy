<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 02:52:25
         compiled from "C:\Program Files\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\pin\solicitar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2499453bc91ca886247-59051199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d0472c0a0214098c330b6cd08eb6376497a578' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\pin\\solicitar.tpl',
      1 => 1404867124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2499453bc91ca886247-59051199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc91ca8bcd52_35628527',
  'variables' => 
  array (
    'token' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc91ca8bcd52_35628527')) {function content_53bc91ca8bcd52_35628527($_smarty_tpl) {?><h1>Ingresar PIN</h1>
<form action="/pin/solicitar/token/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
/" method="post">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>PIN(*):</td>
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
