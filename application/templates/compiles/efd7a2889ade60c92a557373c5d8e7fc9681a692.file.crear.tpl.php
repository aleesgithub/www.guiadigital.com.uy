<?php /* Smarty version Smarty-3.1.18, created on 2014-07-27 06:06:50
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\lugarsector\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:350153d470d84df792-12686244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd7a2889ade60c92a557373c5d8e7fc9681a692' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\lugarsector\\crear.tpl',
      1 => 1406433980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '350153d470d84df792-12686244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d470d8559591_54627390',
  'variables' => 
  array (
    'lugares' => 0,
    'model' => 0,
    'sectores' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d470d8559591_54627390')) {function content_53d470d8559591_54627390($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><h1>Agregar Lugar , Sector, Precio y entradas habilitadas.</h1>
<form action="/lugarsector/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Lugar(*):</td>
    <td><select name=lugarId ><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lugares']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['lugarId']),$_smarty_tpl);?>
</select></td>
  </tr>
  <tr>
      <td>Sector:</td>
    <td><select name=sectorId><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['sectores']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['sectorId']),$_smarty_tpl);?>
</select></td>
  </tr>
   <tr>
       <td>Precio:</td>
    <td><input name="precio" type="int" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['precio'];?>
" /></td>
  </tr>
  <tr>
    <td>Habilitadas</label></td>
    <td><input name="habilitadas" type="int" id="habilitadas" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['habilitadas'];?>
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
