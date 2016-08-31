<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 02:32:53
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\pin\telefono.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2739653bc8db5b2a838-93616563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43abc333299053159ba29c7e244b786022a6ec4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\pin\\telefono.tpl',
      1 => 1404865063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2739653bc8db5b2a838-93616563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc8db5ba4635_95331264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc8db5ba4635_95331264')) {function content_53bc8db5ba4635_95331264($_smarty_tpl) {?><h1>Ingrese Telefono</h1>
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
