<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 17:08:25
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\evento\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1598353d4a15c5dec01-83390106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf7a066b35200151efb9807ad918a5bb30aeddd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\evento\\index.tpl',
      1 => 1408046904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1598353d4a15c5dec01-83390106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d4a15c695902_67624743',
  'variables' => 
  array (
    'Tr' => 0,
    'espectaculo' => 0,
    'rows' => 0,
    'row' => 0,
    'espectaculos' => 0,
    'lugares' => 0,
    'lugar' => 0,
    'sectores' => 0,
    'sector' => 0,
    'cantidades' => 0,
    'cantidad' => 0,
    'cantV' => 0,
    'cantH' => 0,
    'css' => 0,
    'disabled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4a15c695902_67624743')) {function content_53d4a15c695902_67624743($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_eventos");?>
 <?php if ($_smarty_tpl->tpl_vars['espectaculo']->value['nombre']) {?> de (<?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['nombre'];?>
) <?php }?></h3>

<table border="0" class="table table-hover">
  <tr>
    <td width="5%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("id");?>
</strong></td>
    <td width="15%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</strong></td>
    <td width="15%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("espectaculo");?>
</strong></td>
    <td width="10%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("lugar");?>
</strong></td>
    <td width="6%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("sector");?>
</strong></td>
    <td width="4%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha");?>
</strong></td>
    <td width="4%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("hora");?>
</strong></td>
    <td width="6%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("estado");?>
</strong></td>
    <td width="6%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_creado");?>
</strong></td>
    <td width="6%" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("entradas_habilitadas");?>
</strong></td>
    <td width="10%" align="center"></td>
    <td width="15%" align="right"><input type="button" class="btn btn-default" onclick="location.href='/evento/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_evento");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("agregar_evento");?>
"></td>
    
  </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["cantH"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['habilitadas'], null, 0);?>
        <tr>
          <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</strong></td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
          <td>
              <?php  $_smarty_tpl->tpl_vars['espectaculo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['espectaculo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['espectaculos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['espectaculo']->key => $_smarty_tpl->tpl_vars['espectaculo']->value) {
$_smarty_tpl->tpl_vars['espectaculo']->_loop = true;
?>       
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['espectaculoId']==$_smarty_tpl->tpl_vars['espectaculo']->value['id']) {?> <?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['nombre'];?>
 <?php }?>
              <?php } ?>
          </td>
          <td>
              <?php  $_smarty_tpl->tpl_vars['lugar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lugar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lugares']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lugar']->key => $_smarty_tpl->tpl_vars['lugar']->value) {
$_smarty_tpl->tpl_vars['lugar']->_loop = true;
?>       
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['lugarId']==$_smarty_tpl->tpl_vars['lugar']->value['id']) {?> <?php echo $_smarty_tpl->tpl_vars['lugar']->value['nombre'];?>
 <?php }?>
              <?php } ?>
          </td>
          <td>
              <?php  $_smarty_tpl->tpl_vars['sector'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sector']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sectores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sector']->key => $_smarty_tpl->tpl_vars['sector']->value) {
$_smarty_tpl->tpl_vars['sector']->_loop = true;
?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['sectorId']==$_smarty_tpl->tpl_vars['sector']->value['id']) {?><?php echo $_smarty_tpl->tpl_vars['sector']->value['nombre'];?>
 <?php }?>
              <?php } ?>
          </td>
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['fecha'],"%d/%m/%Y");?>
</td>
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['hora'],"%H:%M");?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y ");?>
</td>
          <?php $_smarty_tpl->tpl_vars["css"] = new Smarty_variable("alert alert-success", null, 0);?>
          <?php $_smarty_tpl->tpl_vars["titbut"] = new Smarty_variable("Comprar Ticket", null, 0);?>
          <?php $_smarty_tpl->tpl_vars["cantV"] = new Smarty_variable(0, null, 0);?>
          <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable('', null, 0);?>  
          <?php  $_smarty_tpl->tpl_vars['cantidad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cantidad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cantidad']->key => $_smarty_tpl->tpl_vars['cantidad']->value) {
$_smarty_tpl->tpl_vars['cantidad']->_loop = true;
?>       
              <?php $_smarty_tpl->tpl_vars["titbut"] = new Smarty_variable("Comprar Ticket", null, 0);?>
              <?php if ($_smarty_tpl->tpl_vars['row']->value['id']==$_smarty_tpl->tpl_vars['cantidad']->value['eventoId']) {?>
                  <?php $_smarty_tpl->tpl_vars["cantV"] = new Smarty_variable($_smarty_tpl->tpl_vars['cantidad']->value['sum_cantidad'], null, 0);?>
                  <?php if ($_smarty_tpl->tpl_vars['cantV']->value/$_smarty_tpl->tpl_vars['cantH']->value==1) {?> 
                     <?php $_smarty_tpl->tpl_vars["css"] = new Smarty_variable("alert alert-disabled", null, 0);?>
                     <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable("disabled='disabled'", null, 0);?>
                     <?php $_smarty_tpl->tpl_vars["titbut"] = new Smarty_variable("Agotadas", null, 0);?>
                  <?php } elseif ($_smarty_tpl->tpl_vars['cantV']->value/$_smarty_tpl->tpl_vars['cantH']->value>0.9) {?>
                     <?php $_smarty_tpl->tpl_vars["css"] = new Smarty_variable("alert alert-danger", null, 0);?>
                  <?php } elseif ($_smarty_tpl->tpl_vars['cantV']->value/$_smarty_tpl->tpl_vars['cantH']->value>0.7) {?>
                     <?php $_smarty_tpl->tpl_vars["css"] = new Smarty_variable("alert alert-warning", null, 0);?>  
                  <?php } else { ?>
                     <?php $_smarty_tpl->tpl_vars["css"] = new Smarty_variable("alert alert-success", null, 0);?> 
                  <?php }?>
              <?php }?>
          <?php } ?>  
          <td><?php echo $_smarty_tpl->tpl_vars['cantV']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['habilitadas'];?>
</td>
          <td class="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"><input type="button" class="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" onclick="location.href='/ticket/crear/eventoId/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("comprar_entrada");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("comprar_entrada");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
></td>
          <td> 
              <input type="button" class="btn btn-default"  onclick="location.href='/evento/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("editar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("editar_evento");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)">
              <?php if ($_smarty_tpl->tpl_vars['cantV']->value==0) {?><input type="button" class="btn btn-default"  onclick="return confirmar('/evento/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_evento");?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)"><?php }?>
          </td>   
        </tr>  
    <?php } ?>
  
  
  
</table>

 <?php }} ?>
