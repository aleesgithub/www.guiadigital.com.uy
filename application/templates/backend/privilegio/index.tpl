<h3>{$Tr->_("Privilegios")}</h3>{include file = 'backend/layout/search.tpl'}



<table border="0" class="table">
  <tr>
    <th width="5" align="center">{$Tr->_("Id")}</th>
    <th width="10" align="center">{$Tr->_("Rol")}</th>
    <th width="10%" align="center">{$Tr->_("controller")|capitalize}</th>
    <th width="15%" align="center">{$Tr->_("metodo")}</th>
    <th width="5%" align="center">{$Tr->_("ACL")}</th>
    <th width="5%" align="center">{$Tr->_("Recursos")}</th>
    <th width="15%" align="center">{$Tr->_("fecha_creado")}</th>
    <th width="15%" align="center">{$Tr->_("fecha_actualizado")}</th>
    <th width="20%" align="right"><input type="button" class="btn" onclick="location.href='/privilegio/crear/'" value="{$Tr->_("Agregar Privilegios")}" title="{$Tr->_("agregar_usuario")}"></th>
  </tr>
  {foreach $rows as $row}
      <tr>
    <td>{$row.id}</td>
    <td>{$row.rolRol}</td>
    <td>{$row.controller}</td>
    <td>{if $row.method!=NULL}{$row.method|lower}{else}Todos{/if}    </td>
    <td>{$row.acl}</td>
    <td>{if $row.resourse!=NULL}{$row.resourse}{else}Todos{/if}</td>
    <td>{$row.created|date_format:"%d/%m/%Y" }</td>
    <td>{$row.updated|date_format:"%d/%m/%Y"}</td>
    <td> 
        <input type="button" class="btn" onclick="location.href='/privilegio/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("editar_privilegio")} ({$row.controller})">
        <input type="button" class="btn" onclick="return confirmar('/privilegio/eliminar/id/{$row.id}/', 'Seguro desea eliminar el privilegio sobre el controlador {$row.controller} a ({$row.rolRol})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("Eliminar Privilegio del controlador")} ({$row.controller})">
    </td>
  </tr>
  {/foreach}
</table>
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>