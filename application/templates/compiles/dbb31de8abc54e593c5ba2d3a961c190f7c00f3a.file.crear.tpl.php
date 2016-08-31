<?php /* Smarty version Smarty-3.1.18, created on 2014-07-09 01:59:33
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\categoria\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3179553bc85e58ae047-56385547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb31de8abc54e593c5ba2d3a961c190f7c00f3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\categoria\\crear.tpl',
      1 => 1403054346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3179553bc85e58ae047-56385547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bc85e5903f56_87899110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc85e5903f56_87899110')) {function content_53bc85e5903f56_87899110($_smarty_tpl) {?><h1>Agregar Categor&iacute;a</h1>
<form action="/categoria/crear/" method="post">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Nombre(*):</td>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
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
