
{include file = 'backend/layout/search.tpl'}
  
       
<table class="table">
    <tr>

      <th width="5%" align="center"> {$Tr->_("Id")}</strong></th>
      <th width="20%" align="center"> {$Tr->_("consultaId")|capitalize}</th>
      <th width="5%" align="center"> {$Tr->_("contactatoId")|capitalize}</th>
      <th width="5%" align="center"> </th>
    </tr>
    <!-- Siempre que se use Smarty se tiene que usar entre llaves }{ --!>
    
    {foreach $rows as $row}
       
            <tr>
                <td>{$row.id}</td>
                <td>{$row.consultaId}</td>
                <td>{$row.contactoId}</td>
                <td> 
                  <input type="button" class="btn btn-default" onclick="location.href='/empresa/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("editar_usuario")} ({$row.nombre})" {$disabled}>
                  <input type="button" class="btn btn-default" onclick="return confirmar('/empresa/eliminar/id/{$row.id}/', 'Seguro desea eliminar ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("eliminar_usuario")} ({$row.nombre})"  {$disabled}>

                </td>
            </tr>
        
        
    {/foreach}
</table>
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>
