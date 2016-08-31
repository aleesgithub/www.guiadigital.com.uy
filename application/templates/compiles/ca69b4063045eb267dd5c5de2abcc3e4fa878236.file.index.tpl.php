<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 00:22:29
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1399353d4a092a51fe0-57419544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca69b4063045eb267dd5c5de2abcc3e4fa878236' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\user\\index.tpl',
      1 => 1407982697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1399353d4a092a51fe0-57419544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d4a092bbf9e9_73992050',
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4a092bbf9e9_73992050')) {function content_53d4a092bbf9e9_73992050($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_usuarios");?>
</h2>

<table border="0" class="table table-hover">
  <tr>
    <td width="8" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("id");?>
</strong></td>
    <td width="8" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("imagen");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("usuario"));?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("rol");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("apellido");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("mail");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("idioma");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_actualizado");?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("ultima_sesion"));?>
</strong></td>
    <td width="5%" align="center"><strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("ultima_ip"));?>
</strong></td>
    <td width="20%" align="right"><input type="button" class="btn btn-default" onclick="location.href='/user/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_usuario");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_usuario");?>
"></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <tr>
    <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</strong></td>
    <td><a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
" /></a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usr'];?>
</td>
    <td>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='USR') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Usuario");?>
<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='ADM') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Administrador");?>
<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='REP') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Reporte");?>
<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='INV') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Invitado");?>
<?php }?>
    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
</td>
    <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</a></td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['language']=='es') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Espa&ntilde;ol");?>
<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['language']=='en') {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Ingl&eacute;s");?>
<?php }?>
    </td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['lastLog'],"%d/%m/%Y %H:%M:%S");?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['lastIp'];?>
</td>
    <td> 
        <input type="button" class="btn btn-default" onclick="location.href='/user/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
        <input type="button" class="btn btn-default" onclick="return confirmar('/user/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_usuario");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
    </td>
  </tr>
  <?php } ?>
</table><?php }} ?>
