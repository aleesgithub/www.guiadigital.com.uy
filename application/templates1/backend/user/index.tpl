<h3>{$Tr->_("listado_usuarios")}</h3>{include file = 'backend/layout/search.tpl'}



<table border="0" class="table" id="tabla3">
  <tr>
    
    <th width="5" align="center">{$Tr->_("imagen")}</th>
    <th width="5%" align="center">{$Tr->_("usuario")|capitalize}</th>
    <th width="5%" align="center">{$Tr->_("rol")}</th>
    <th width="10%" align="center">{$Tr->_("nombre")}</th>
    <th width="10%" align="center">{$Tr->_("apellido")}</th>
    <th width="21%" align="center">{$Tr->_("mail")}</th>
 
    <th width="22%" align="center">{$Tr->_("fecha_creado")}</th>
    <th width="22%" align="center">{$Tr->_("fecha_actualizado")}</th>
    
 
    <th width="14%" align="right"><input type="button" class="btn" onclick="location.href='/user/crear/'" value="{$Tr->_("agregar_usuario")}" title="{$Tr->_("agregar_usuario")}"></th>
  </tr>
  {foreach $rows as $row}
      <tr>
    
    <td><a href="/uploads/{$row.imagen}" target="_blank"><img src="/uploads/mini/{$row.imagen}" title="{$row.nombre} {$row.apellido}" alt="{$row.nombre} {$row.apellido}" /></a></td>
    <td>{$row.usr}</td>
    <td><label class="lbl1"> ({$row.role})</label>
      <!--{if $row.role == 'USR'}{$Tr->_("Usuario")}{/if}
      {if $row.role == 'ADM'}{$Tr->_("Administrador")}{/if}
      {if $row.role == 'CCL'}{$Tr->_("Comit&eacute; Comercial")}{/if}
      {if $row.role == 'REP'}{$Tr->_("Reporte")}{/if}
      {if $row.role == 'INV'}{$Tr->_("Invitado")}{/if}-->
    </td>
    <td>{$row.nombre}</td>
    <td>{$row.apellido}</td>
    <td><a href="mailto:{$row.email}">{$row.email}</a></td>
    
    <td>{$row.created|date_format:"%d/%m/%Y %H:%M:%S"}</td>
    <td>{$row.updated|date_format:"%d/%m/%Y %H:%M:%S"}</td>
    
   
    <td> 
        <input type="button" class="btn" onclick="location.href='/user/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("editar_usuario")} ({$row.nombre})">
        <input type="button" class="btn" onclick="return confirmar('/user/eliminar/id/{$row.id}/', 'Seguro desea eliminar ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("eliminar_usuario")} ({$row.nombre})">
    </td>
  </tr>
  {/foreach}
</table>
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>