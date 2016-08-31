<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 19:01:01
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\evento\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1333653d586f5a6a9c5-37605549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e25ee8cb8aa96e4f5d63a56f1567f70e26d7a05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\evento\\crear.tpl',
      1 => 1408053654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333653d586f5a6a9c5-37605549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d586f5adfcc3_97002668',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'espectaculos' => 0,
    'lugares' => 0,
    'sectores' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d586f5adfcc3_97002668')) {function content_53d586f5adfcc3_97002668($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_evento");?>
</h3>

<form action="/evento/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
        <input name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
    </td>
    <td width="50%">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha");?>
 (*)</strong>
        <input id="f_rangeEnd" name='fecha' value="<?php echo $_smarty_tpl->tpl_vars['model']->value['fecha'];?>
"/><button id="f_rangeEnd_trigger">...</button>
    </td>
  </tr>  
  <tr>
    <td>  
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("espectaculo");?>
 (*)</strong>
        <select id="espectaculoId" name="espectaculoId"><option>-- <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_espectaculo");?>
 --</option> <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['espectaculos']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['espectaculoId']),$_smarty_tpl);?>
 </select>
    </td>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("hora");?>
 (*)</strong>
        <input name="hora" type="time" id="hora" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['hora'];?>
" />    
    </td>
  </tr>
  <tr>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("lugar");?>
 (*)</strong>
        <select name="lugarId" id="lugarId" ><option>-- <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_lugar");?>
 --</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lugares']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['lugarId']),$_smarty_tpl);?>
</select>
    </td>    
    <td>    
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("precio");?>
 (*)</strong>
        <input name="precio" type="text" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['precio'];?>
" />
    </td>    
  </tr>
  <tr>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("sector");?>
 (*)</strong>
        <select name="sectorId" id="sectorId" ><option>-- <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_sector");?>
 --</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['sectores']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['sectorId']),$_smarty_tpl);?>
</select><label id="capacidadsector"></>
    <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("entradas_habilitadas");?>
 (*)</strong>
        <input name="habilitadas" type="text" id="habilitadas" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['habilitadas'];?>
" />
    </td>
  </tr>  
  <tr>
      <td align="center" colspan="2">
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("estado");?>
 (*)</strong>
        <select name="estado" id="estado">
            <option value="ACTIVO"      <?php if ($_smarty_tpl->tpl_vars['model']->value['estado']=="Activo") {?> selected="selected" <?php }?>>Activo</option>
            <option value="FINALIZADO"  <?php if ($_smarty_tpl->tpl_vars['model']->value['estado']=="Finalizado") {?> selected="selected" <?php }?>>Finalizado</option> 
            <option value="AGOTADO"     <?php if ($_smarty_tpl->tpl_vars['model']->value['estado']=="Agotado") {?> selected="selected" <?php }?>>Agotado</option> 
        </select>
    </td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
  </tr>
</table>
</form><?php }} ?>
