<?php /* Smarty version Smarty-3.1.18, created on 2015-02-23 20:12:21
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\comentario\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1777954eb337a692402-64902999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55c2651041a29c1009cffa54342049dbae5699df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\comentario\\crear.tpl',
      1 => 1424718659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777954eb337a692402-64902999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54eb337a6eb951_90184862',
  'variables' => 
  array (
    'nota' => 0,
    'user_data' => 0,
    'model' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54eb337a6eb951_90184862')) {function content_54eb337a6eb951_90184862($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>

<form action="/comentario/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="notaId" value="<?php echo $_smarty_tpl->tpl_vars['nota']->value['notaId'];?>
" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['nota']->value['proyectoId'];?>
" />
<table  border="0"  >     
    <tr>
      <td width="10%" >  
          
      </td>
      <td width="90%">
          <div class="globpreg"><?php echo $_smarty_tpl->tpl_vars['nota']->value['texto'];?>
</div>
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
          <input class="btn" type="button" onclick="location.href='/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['nota']->value['proyectoId'];?>
'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
      </td>
      
    </tr>
    
</table>
</form><?php }} ?>
