<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 16:52:21
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\evento\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1627753d9263608b235-77347944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd977674ba52f75bf46185f10f1dfca0e550da985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\evento\\listado.tpl',
      1 => 1408045940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1627753d9263608b235-77347944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d92636137058_38625352',
  'variables' => 
  array (
    'Tr' => 0,
    'espectaculo' => 0,
    'rows' => 0,
    'espectaculos' => 0,
    'row' => 0,
    'cantidades' => 0,
    'cantidad' => 0,
    'cantV' => 0,
    'cantH' => 0,
    'css' => 0,
    'disabled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d92636137058_38625352')) {function content_53d92636137058_38625352($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_eventos");?>
 <?php if ($_smarty_tpl->tpl_vars['espectaculo']->value['nombre']) {?> de (<?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['nombre'];?>
) <?php }?></h3>

<table width="612" border="0" class="table table-hover">
    <tr>
        <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("espectaculo");?>
</strong></td>
        <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("evento");?>
</strong></td>
        <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("fecha_evento");?>
</strong></td>
        <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("hora");?>
</strong></td>
        <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("estado_evento");?>
</strong></td>
        <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("entradas_habilitadas");?>
</strong></td>
        <td>&nbsp;</td>
    </tr>
    
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<tr>
    <td>
        <?php  $_smarty_tpl->tpl_vars['espectaculo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['espectaculo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['espectaculos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['espectaculo']->key => $_smarty_tpl->tpl_vars['espectaculo']->value) {
$_smarty_tpl->tpl_vars['espectaculo']->_loop = true;
?>       
            <?php if ($_smarty_tpl->tpl_vars['row']->value['espectaculoId']==$_smarty_tpl->tpl_vars['espectaculo']->value['id']) {?> <?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['nombre'];?>
 <?php }?>
        <?php } ?></td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['fecha'],"%d/%m/%Y");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['hora'],"%H:%M");?>
</td>
    
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
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
    

</tr>
<?php } ?>
</table>
<?php }} ?>
