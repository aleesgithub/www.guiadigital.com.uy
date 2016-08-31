<?php /* Smarty version Smarty-3.1.18, created on 2014-07-30 06:53:43
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\lugarsector\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:608153d825757c7a94-87699702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b090217de14aa557a231d49819fe18be8e59b334' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\lugarsector\\crear.tpl',
      1 => 1406695985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '608153d825757c7a94-87699702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d82575874460_86014707',
  'variables' => 
  array (
    'lugares' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d82575874460_86014707')) {function content_53d82575874460_86014707($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><h1>Agregar Lugar , Sector, Precio y entradas habilitadas.</h1>
<form action="/lugarsector/crear/" method="post" >
<input type="hidden" name="do_submit" value="1" />
<!--En vez de tabla puedo armar con divs-->
<table class="table">
  <tr>
    <td>Lugar(*):</td>
    <td><select id="lugarId" name="lugarId" ><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lugares']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['lugarId']),$_smarty_tpl);?>
</select></td>
  </tr>
  <tr>
      <td>Sector:</td>
    <td><select id="sectorId" name="sectorId"></select></td>
  </tr>
   <tr>
       <td>Precio:</td>
    <td><input id="precio" name="precio" type="int" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['precio'];?>
" /></td>
  </tr>
  <tr>
    <td>Habilitadas</label></td>
    <td><input id="habilitadas" name="habilitadas" type="int" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['habilitadas'];?>
" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" id="button" name="button" value="Enviar" /></td>
  </tr>
  <tr>
    <td colspan="2">* Campos obligatorios</td>
    </tr>
</table>
</form><?php }} ?>
