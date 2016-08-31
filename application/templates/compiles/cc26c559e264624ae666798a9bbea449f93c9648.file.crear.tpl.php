<?php /* Smarty version Smarty-3.1.18, created on 2014-07-27 07:51:19
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\evento\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:712453d419179f4075-86474484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc26c559e264624ae666798a9bbea449f93c9648' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\evento\\crear.tpl',
      1 => 1406440276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712453d419179f4075-86474484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d41917a6de79_86381634',
  'variables' => 
  array (
    'model' => 0,
    'espectaculos' => 0,
    'lugares' => 0,
    'sectores' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d41917a6de79_86381634')) {function content_53d41917a6de79_86381634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><h1>Agregar Evento</h1>
<form action="/evento/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Nombre(*):</td>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /></td>
  </tr>
  
   
  
  <tr>
    <td>Espectaculo:</td>
    <td><select name=espectaculoId><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['espectaculos']->value),$_smarty_tpl);?>
</select></td>
  </tr>
   <tr>
    <td>Lugar(*):</td>
    <td><select name=lugarId ><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lugares']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['lugarId']),$_smarty_tpl);?>
</select></td>
  </tr>
  <tr>
    <td>Sector(*):</td>
    <td><select name=sectorId ><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['sectores']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['sectorId']),$_smarty_tpl);?>
</select></td>
  </tr>
  <tr>
    <td>Inicia(*):</td>
    <td><input name="fechinicio" type="date" id="fechinicio" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['fechinicio'];?>
" /></td>
  </tr>
  <tr>
    <td>Finaliza(*):</td>
    <td><input name="fechfin" type="date" id="fechfin" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['fechfin'];?>
" /></td>
  </tr>
  <tr>
    <td>Hora del Evento(*):</td>
    <td><input name="hora" type="time" id="hora" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['hora'];?>
" /></td>
  </tr>
  <tr>
    <td>Estado :</td>
    <td><input name="estado" type="int" id="estado" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['estado'];?>
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
</form>
<?php }} ?>
