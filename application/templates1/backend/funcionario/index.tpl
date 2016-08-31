

<table width="100%">
    <tr>
        <td width="30%">
            <input type="button" class="btn btn-default" onclick="location.href='/funcionario/crear/'" value="{$Tr->_("Agragar Funcionario")}" title="{$Tr->_("Agragar Funcionario")}">
            
        </td>
        <td width="30%">
            &nbsp;
        </td>
        <td>
            {include file = 'backend/layout/search.tpl'}
        </td>
    </tr>
</table>

<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>
<table border="0" class="table table-hover" style="font-size: 14px">
  <tr>
    
    <td width="5%" align="left"><strong>{$Tr->_("imagen")}</strong></td>
    <td width="10%" align="left"><strong>Nombre</strong></td>
    <td width="10%" align="left"><strong>Apellido</strong></td>
    <td width="5%" align="left"><strong>Estado</strong></td>
    <td width="5%" align="left"><strong>Cargo</strong></td>
    <td width="8%" align="left"><strong>Ingreso</strong></td>
    <td width="8%" align="left"><strong>Egreso</strong></td>
    <td width="24%" align="left"><strong>E-mail</strong></td>
    <td width="5%" align="left"><strong>C&oacute;digo</strong></td>
    <td width="20%" align="left"></td>
  </tr>
  {foreach $rows as $row}
      <tr>
    
    <td><a href="/uploads/{$row.imagen}" target="_blank"><img src="/uploads/mini/{$row.imagen}" title="{$row.nombre} {$row.apellido}" alt="{$row.nombre} {$row.apellido}" /></a></td>
    <td>{$row.nombre}</td>
    <td>{$row.apellido}</td>
    <td>{$row.estado}</td>
    <td>{$row.cargo}</td>
    <td>{$row.ingreso}</td>
    <td>{$row.egreso}</td>
    <td>{$row.email}</td>
    <td>{$row.codigo}</td>
    <td> 
        <input type="button" class="btn btn-default" onclick="location.href='/funcionario/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("editar_usuario")} ({$row.nombre})">
        <input type="button" class="btn btn-default" onclick="return confirmar('/funcionario/eliminar/id/{$row.id}/', 'Seguro desea eliminar ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("eliminar_usuario")} ({$row.nombre})">
    </td>
  </tr>
  {/foreach}
</table>