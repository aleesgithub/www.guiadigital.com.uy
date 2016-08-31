<div id='cssmenu'>
<ul>
    <li {if $controller == 'Promocion'}class="cssmenu"{/if}>     <a onclick="location.href='/proyecto/?tipo=promocion&estado=' + document.getElementById('estado').value">{$Tr->_("Promociones")|capitalize}</a></li>
    
    <li {if $controller == 'Convenio'} class="active" {/if}>     <a onclick="location.href='/proyecto/?tipo=producto&estado=' + document.getElementById('estado').value">{$Tr->_("Productos")|capitalize}</a></li>
    
    <li {if $controller == 'Producto'} class="active" {/if}>     <a onclick="location.href='/proyecto/?tipo=convenio&estado=' + document.getElementById('estado').value">{$Tr->_("convenios")|capitalize}</a></li>
</ul>
</div>

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
      <th width="10%" align="center"> {$Tr->_("referencia")|capitalize}</th>
      <th width="10%" align="center"> {$Tr->_("tipo")|capitalize}</th>
      <th width="10%" align="center">{$Tr->_("estado")|capitalize}</th>
      <th width="10%" align="center"> {$Tr->_("creado")|capitalize}</th>
      <th width="10%" align="center"> {$Tr->_("actualizado")|capitalize}</th>
      <th width="20%" align="right"></th>
    </tr>
    {foreach $rows as $row}
        {assign var="print" value=0} 
        {if $row.usuario==$user_data->usr}{assign var="print" value='1'}{/if}
        {foreach $colaboradores as $col}
           
            {if $row.id==$col.proyectoId}
                {if $col.usuario==$user_data->usr}{assign var="print" value='1'}{/if}
            {/if}
        {/foreach}
        {assign var="ctrl" value="nota"}
        {if $row.tipo=="Procedimiento"}{assign var="ctrl" value='capitulo'}{/if}
        
        
        {if $print || $row.estado=='Vigente'}
            <tr>
                <td>{$row.id}</td>
                <td><a href="/{$ctrl}/?proyectoId={$row.id}">{$row.nombre}</a></td>
                <td>{$row.usuario}</td>
                <td>{$row.codRef}</td>
                <td>{$row.tipo}</td>
                <td>{$row.estado}</td>
                <td>{$row.created|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                <td>{$row.updated|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                <td> {assign var="disabled" value="" }
                    {if $row.estado!='Desarrollo'} {assign var="disabled" value="disabled='disabled'" }{/if}
                  <input type="button" class="btn btn-default" onclick="location.href='/proyecto/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("editar_usuario")} ({$row.nombre})" {$disabled}>
                  <input type="button" class="btn btn-default" onclick="return confirmar('/proyecto/eliminar/id/{$row.id}/', 'Seguro desea eliminar ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("eliminar_usuario")} ({$row.nombre})"  {$disabled}>

                </td>
            </tr>
        {/if}
        
    {/foreach}
</table>
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>