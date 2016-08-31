<h3>Lista de Roles</h3>
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>
<table border="0" class="table table-hover">
  <tr>
    
    <td width="5%" align="center"><strong>Id</strong></td>
    <td width="10%" align="center"><strong>Rol</strong></td>
    <td width="25%" align="center"><strong>Detalle</strong></td>
 
    <td width="20%" align="center"><strong>{$Tr->_("fecha_creado")}</strong></td>
    <td width="20%" align="center"><strong>{$Tr->_("fecha_actualizado")}</strong></td>
    <td width="20%" align="right"><input type="button" class="btn btn-default" onclick="location.href='/rol/crear/'" value="Agregar Rol" title="Agregar un rol"></td>
  </tr>
  {foreach $rows as $row}
      <tr>
    
    <td>{$row.id}</td>
    <td>{$row.rol}</td>
    <td>{$row.observaciones}</td>
    
    <td>{$row.created|date_format:"%d/%m/%Y %H:%M:%S"}</td>
    <td>{$row.updated|date_format:"%d/%m/%Y %H:%M:%S"}</td>
    
    <td> 
        <input type="button" class="btn btn-default" onclick="location.href='/rol/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="Editar rol  ({$row.rol})">
        <input type="button" class="btn btn-default" onclick="return confirmar('/rol/eliminar/id/{$row.id}/', 'Seguro desea eliminar el rol ({$row.rol})?')" value="{$Tr->_("eliminar")|capitalize}" title="Eliminar el rol ({$row.rol})">
    </td>
  </tr>
  {/foreach}
</table>