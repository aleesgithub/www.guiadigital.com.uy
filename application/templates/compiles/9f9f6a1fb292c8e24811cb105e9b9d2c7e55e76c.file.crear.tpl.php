<?php /* Smarty version Smarty-3.1.18, created on 2015-04-21 15:30:24
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\funcionario\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277005419f58aa92db9-48199560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f9f6a1fb292c8e24811cb105e9b9d2c7e55e76c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\funcionario\\crear.tpl',
      1 => 1429623021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277005419f58aa92db9-48199560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5419f58aba29e0_08815159',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'cargos' => 0,
    'cargo' => 0,
    'estados' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5419f58aba29e0_08815159')) {function content_5419f58aba29e0_08815159($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3>Agregar Funcionario</h3>

<form action="/funcionario/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    <tr>
        
        
    </tr>  
    <tr>
        <td width="10%">  
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
        </td>
        <td width="40%">
            <input class="text" name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
        </td>
        <td width="10%">
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("apellido");?>
 (*)</strong>
        </td>
        <td width="40%">
            <input class="text" name="apellido" type="text" id="apellido" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['apellido'];?>
" />
        </td>
    </tr>
    <tr>
        <td >
            <strong>C&oacute;digo(*)</strong>
        </td>
        <td >
            <input class="text" name="codigo" type="text" id="codigo" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['codigo'];?>
" />
        </td>
        <td>
            <strong>Cargo (*)</strong>
        </td>
        <td>
            <select class="text" name=cargo><option>-- <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_cargo");?>
 --</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cargos']->value,'selected'=>$_smarty_tpl->tpl_vars['cargo']->value),$_smarty_tpl);?>
</select>
            
        </td>    
           
    </tr>
    <tr>
        <td>
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("mail");?>
 (*)</strong>
        </td>
        <td>
            <input class="text" name="email" type="text" id="email" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['email'];?>
" />
        <td>
            <strong>Ingreso(*)</strong>
        </td>
        <td>
            <input class="text" name="ingreso" type="text" id="ingreso" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['ingreso'];?>
" />
        </td>
    </tr> 
    <tr>
        <td >
            <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</strong>
        </td>
        <td >
            <input class="btn" type="file" name="imagen" id="imagen" />
        </td>
        <td>    
            <strong>Estado (*)</strong>
        </td>
        <td>
            <select class="text" name=estado><option>-- <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_estado");?>
 --</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado']->value),$_smarty_tpl);?>
</select>
        </td> 
    </tr>
    <tr>
        <td align="center" colspan="4"><input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
    </tr>
    <tr>
        <td align="center" colspan="4"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
    </tr>
</table>
</form><?php }} ?>
