<?php /* Smarty version Smarty-3.1.18, created on 2014-07-22 16:31:57
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\categoria\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1561353cc285c1e33e5-67900945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '650f40923d6704d721ea7b93deb5765e9ab78d7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\categoria\\actualizar.tpl',
      1 => 1405890218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1561353cc285c1e33e5-67900945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53cc285c2d6fe7_78326092',
  'variables' => 
  array (
    'id' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cc285c2d6fe7_78326092')) {function content_53cc285c2d6fe7_78326092($_smarty_tpl) {?><h1>Actualizar Categor&iacute;a</h1>
<form action="/categoria/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
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
