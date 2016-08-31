<?php /* Smarty version Smarty-3.1.18, created on 2015-04-13 15:02:56
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\capitulo\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11476552bbe806859f7-54630370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e0414a1d51e3cb55bfcf881f91ef467ebbd19b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\capitulo\\crear.tpl',
      1 => 1426772932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11476552bbe806859f7-54630370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'proyecto' => 0,
    'model' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_552bbe807a3034_51739618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552bbe807a3034_51739618')) {function content_552bbe807a3034_51739618($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Nueva NOTA");?>
 : <a href="/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value['nombre'];?>
</a></h3>

<form action="/nota/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['proyectoId'];?>
" />

<table  border="0"  >     
    <tr>
      <td width="10%">  
          <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
      </td>
      <td width="90%">
          <input class="text" name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" size="90%" height="50px"/> 
      </td>
    </tr>
    <tr>
      <td>  
          &nbsp;
      </td>
      <td>
          <input class="text" name="usuario" type="hidden" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
"/> 
      </td>
    </tr>
    <tr>
      <td colspan="2">
          <textarea class="text" name="texto" cols="100" rows="10" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['texto'];?>
"></textarea>
      </td>
    </tr>
    <tr>
        
        <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>

          <input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" />
          <input class="btn" type="button" onclick="location.href='/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
      </td>
      
    </tr>
    
</table>
</form><?php }} ?>
