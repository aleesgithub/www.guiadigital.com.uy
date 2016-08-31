<?php /* Smarty version Smarty-3.1.18, created on 2015-04-16 22:03:19
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\rol\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145875530140918ff38-37861255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02328fa925b2fbb8e1f501ab34cdd0043409255f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\rol\\crear.tpl',
      1 => 1429214595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145875530140918ff38-37861255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_553014091ceda6_69666165',
  'variables' => 
  array (
    'model' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553014091ceda6_69666165')) {function content_553014091ceda6_69666165($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3>Agregar Rol</h3>

<form action="/rol/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    
    <tr>
        <td width="5%">  
            <strong>Rol (*)</strong>
        </td>
        <td width="20%">
            <input class="text" name="rol" type="text" id="rol" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['rol'];?>
" />
        </td>
        <td width="5%">
            <strong>Leyenda (*)</strong>
        </td>
        <td width="20%">
            <input class="text" name="leyenda" type="text" id="leyenda" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['leyenda'];?>
" />
        </td>
         <td width="5%">
            <strong>Observaciones (*)</strong>
        </td>
        <td width="45%">
            <input class="text" name="observaciones" type="text" id="observaciones" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['observaciones'];?>
" />
        </td>
    </tr>
    <tr>
        <td align="center" colspan="6"><input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" /></td>
    </tr>
    <tr>
        <td align="center" colspan="4"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>
</strong></td>
    </tr>
</table>
</form><?php }} ?>
