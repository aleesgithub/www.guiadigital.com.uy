<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 17:02:38
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\evento\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2799153d91141776769-05516485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eee438da8a75720172e70ec2fe66fd6a28583065' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\evento\\actualizar.tpl',
      1 => 1408045136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2799153d91141776769-05516485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d911417bca52_04564901',
  'variables' => 
  array (
    'Tr' => 0,
    'id' => 0,
    'model' => 0,
    'espectaculos' => 0,
    'lugares' => 0,
    'sectores' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d911417bca52_04564901')) {function content_53d911417bca52_04564901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_evento");?>
</h3>

<form action="/evento/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" method="post" enctype="multipart/form-data">
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
            <option value="Activo"      <?php if ($_smarty_tpl->tpl_vars['model']->value['estado']=="Activo") {?> selected="selected" <?php }?>>Activo</option>
            <option value="Finalizado"  <?php if ($_smarty_tpl->tpl_vars['model']->value['estado']=="Finalizado") {?> selected="selected" <?php }?>>Finalizado</option> 
            <option value="Agotado"     <?php if ($_smarty_tpl->tpl_vars['model']->value['estado']=="Agotado") {?> selected="selected" <?php }?>>Agotado</option> 
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
