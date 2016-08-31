

<object data="/aviso/aviso6.mp3" autostart="true" volume="100" width="0" height="0">
</object>

<table width="100%">
    <tr>
        <td width="30%">
            <input type="button" class="btn btn-default" onclick="location.href='/proyecto/crear/'" value="{$Tr->_("Agregar Proyecto")}" title="{$Tr->_("Agregar Proyecto")}">
            
        </td>
        <td width="30%">
            <label class="lbl3">Estado</label><select class="text" id='estado' id="estado" name='estado' onchange="location.href='?estado='+this.value">{html_options options=$estados selected=$estado}</select>
        </td>
        <td>
            {include file = 'backend/layout/search.tpl'}
        </td>
    </tr>
</table>
       
<table class="table">
    <tr>

      <th width="5%" align="center"> {$Tr->_("Id")}</strong></th>
      <th width="20%" align="center"> {$Tr->_("nombre")|capitalize}</th>
      <th width="5%" align="center"> {$Tr->_("usuario")|capitalize}</th>
      <th width="10%" align="center"> {$Tr->_("direccion")|capitalize}</th>
      <th width="10%" align="center"> {$Tr->_("web")|capitalize}</th>
      <th width="10%" align="center">{$Tr->_("telefono")|capitalize}</th>
      
      <th width="20%" align="right"></th>
    </tr>
    {foreach $rows as $row}
        {if $row.estado=='Vigente' || $user_data->role=='ADM'}
            <tr>
                <td>{$row.id}</td>
                <td>{$row.nombre}</td>
                <td>{$row.usuario}</td>
                <td>{$row.direccion}</td>
                <td>{$row.web}</td>
                <td>{$row.telefono}</td>
                <td> 
                  <input type="button" class="btn btn-default" onclick="location.href='/empresa/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("editar_usuario")} ({$row.nombre})" {$disabled}>
                  <input type="button" class="btn btn-default" onclick="return confirmar('/empresa/eliminar/id/{$row.id}/', 'Seguro desea eliminar ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("eliminar_usuario")} ({$row.nombre})"  {$disabled}>

                </td>
            </tr>
        {/if}
        
    {/foreach}
</table>
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>