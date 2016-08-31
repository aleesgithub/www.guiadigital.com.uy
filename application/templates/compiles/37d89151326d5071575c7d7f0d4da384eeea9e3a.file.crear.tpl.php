<?php /* Smarty version Smarty-3.1.18, created on 2015-04-23 18:01:24
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\proyecto\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1122654aaac2526ab10-22806563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37d89151326d5071575c7d7f0d4da384eeea9e3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\proyecto\\crear.tpl',
      1 => 1429804874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1122654aaac2526ab10-22806563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54aaac25324fc9_16258280',
  'variables' => 
  array (
    'Tr' => 0,
    'model' => 0,
    'user_data' => 0,
    'table_options' => 0,
    'tipo' => 0,
    'estados' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aaac25324fc9_16258280')) {function content_54aaac25324fc9_16258280($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_input')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_input.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?>

<form action="/proyecto/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    <tr>
      <td width="20%">  
          <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
      </td>
      <td>
           <input class="text"  name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" />
           <!--<?php echo smarty_function_html_input(array('class'=>'text','name'=>'nombre','type'=>'text','id'=>'nombre','value'=>$_smarty_tpl->tpl_vars['model']->value['nombre']),$_smarty_tpl);?>
-->
      </td>
    </tr>
    <tr>
      <td>  
          <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("usuario"));?>
 (*)</strong>
      </td>
      <td>
           <input class="text" name="usuario" type="text" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
" /> 
      </td>
    </tr>
    <tr>
      <td>
          <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Tipo de Proyecto");?>
 (*)</strong>
      </td>    
      <td>  
           <select class="text" name="tipo"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['table_options']->value,'selected'=>$_smarty_tpl->tpl_vars['tipo']->value),$_smarty_tpl);?>
</select>
      </td>    
    </tr>
    <tr>
      <td>
          <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Estado");?>
 (*)</strong>
      </td>    
      <td><?php if ($_smarty_tpl->tpl_vars['model']->value['estado']=='') {?><?php $_smarty_tpl->tpl_vars["estado"] = new Smarty_variable("Desarrollo", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["estado"] = new Smarty_variable($_smarty_tpl->tpl_vars['model']->value['estado'], null, 0);?><?php }?>
          
           <select class="text" name="estado"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado']->value),$_smarty_tpl);?>
</select>
      </td>    
    </tr>
    <tr>
      <td align="center" colspan="2"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>

          <input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" />
      <input class="btn" type="button" onclick="location.href='/proyecto/'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
      </td>
    </tr>
</table>
</form><?php }} ?>
