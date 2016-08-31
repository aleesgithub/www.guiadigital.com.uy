<?php /* Smarty version Smarty-3.1.18, created on 2014-07-26 22:49:11
         compiled from "C:\xampp\htdocs\local3.ort.edu.uy\application\templates\backend\evento\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2995653d3c9bc475706-24252530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e9978a46e0442f0675055baa5a868a90eb9f1a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\application\\templates\\backend\\evento\\index.tpl',
      1 => 1406407740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2995653d3c9bc475706-24252530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d3c9bc5e3105_51297066',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'espectaculo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d3c9bc5e3105_51297066')) {function content_53d3c9bc5e3105_51297066($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\local3.ort.edu.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h1>Listado de Eventos</h1>
<!--Agrego link a crear evento-->
<?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="text-right"><a href="/evento/crear/">Agregar Evento</a></p>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="170">Id</th>
    <th width="180">Nombre</th>
    <th width="180">Espectaculo</th>
    <th width="180">Lugar Evento</th>
    <th width="100">Inicia :</th>
    <th width="100">Finaliza :</th>
    <th width="100">HORA EVENTO</th>
    <th width="70">Estado</th>
    <th width="248">Creado</th>
    <th width="248">Actualizado</th>

    <th width="248"></th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <!--Creo link para actualizar evento por id con row.id en nombre de espectaculo y lugarsector-->
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
    
    <td><a href="/evento/?espectaculo=<?php echo $_smarty_tpl->tpl_vars['row']->value['espectaculoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['nombre'];?>
</a></td>

    
    <td><a href="/evento/?lugarsector=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['lugarsectorId'];?>
</a></td>
    
    
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['fechinicio'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['fechfin'],"%d/%m/%Y %I:%M:%S");?>
</td>

    <td><a href="/evento/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['row']->value['hora'];?>
</a></td>
    <td><a href="/evento/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</a></td>

    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %I:%M:%S");?>
</td>
    <td><a href="/evento/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" title="Actualizar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">Actualizar</a> <a href="javascript:confirmar('/evento/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro elimina este evento');" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">Eliminar</a></td>
  </tr>
      
  <?php } ?>
  
  <?php echo $_smarty_tpl->tpl_vars['espectaculo']->value['nombre'];?>

  
</table>

 <?php }} ?>
