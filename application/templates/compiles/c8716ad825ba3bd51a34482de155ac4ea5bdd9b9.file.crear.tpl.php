<?php /* Smarty version Smarty-3.1.18, created on 2014-07-27 02:40:34
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\sector\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3098053d42aa8230e97-84376055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8716ad825ba3bd51a34482de155ac4ea5bdd9b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\sector\\crear.tpl',
      1 => 1406421374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3098053d42aa8230e97-84376055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d42aa826dd98_66682800',
  'variables' => 
  array (
    'model' => 0,
    'lugares' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d42aa826dd98_66682800')) {function content_53d42aa826dd98_66682800($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><h1>Agregar Sector</h1>
<form action="/sector/crear/" method="post">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Nombre(*):</td>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  <tr>
    <td>Capacidad:</td>
    <td><input name="capacidad" type="int" id="capacidad" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['capacidad'];?>
" /></td>
  </tr>
  <tr>
    <td>Pertenece a Lugar:</td>
    <td><select name=lugarId>
   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lugares']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['lugarId']),$_smarty_tpl);?>

    </select></td>
  </tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Enviar" /></td>
  </tr>
  <tr>
    <td colspan="2">* Campos obligatorios</td>
    </tr>
</table>
</form>
<?php }} ?>
