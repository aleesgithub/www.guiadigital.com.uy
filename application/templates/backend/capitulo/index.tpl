
<table width="100%">
    <tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/capitulo/crear/proyectoId/{$proyecto.id}/'" value="{$Tr->_("Agregar Capitulo")}" title="{$Tr->_("Nuevo")}">
        </td>
        <td>    
            {include file = 'backend/layout/search.tpl'}
        </td>
    </tr>
</table>
        
            {foreach $rows as $row}
                
                {assign var="disabled" value="" }
                {assign var="info" value="" }
                {if $proyecto.estado!='Desarrollo' || $row.usuario!=$user_data->usr}
                    {assign var="disabled" value="disabled='disabled'" }
                    {assign var="info" value="<img src='/img/info.png' style='cursor: pointer' width='25' height='25' onclick='info(\"Las Notas pueden ser modificadas &uacute;nicamente por el usuario creador\")'>"}
                {/if}
                <strong>{$row.nombre}</strong>&nbsp;&nbsp;<label class="lbl1">Creada:{$row.created|date_format:"%d/%m/%Y %H:%M:%S"} </label>
                
            <div class="nota" >{$row.texto}({$row.usuario})<br>
            
            <div class="notabtn" >{$info}
                {if $row.capituloId!=1}
                    <input type="button" class="btn btn-default" style="font-size: 12px" onclick="location.href='/comentario/crear/notaId/{$row.id}/'" value="{$Tr->_("comentar")|capitalize}" title="{$Tr->_("Agregar Comentario")} ({$row.nombre})">
                {/if}
                <input type="button" class="btn btn-default" style="font-size: 12px" onclick="location.href='/nota/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("Editar nota")} ({$row.nombre})" {$disabled}>
                <input type="button" class="btn btn-default" style="font-size: 12px" onclick="return confirmar('/nota/eliminar/id/{$row.id}/', 'Seguro desea eliminar la nota ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("Eliminar Nota ")} ({$row.nombre})" {$disabled}>
            </div>
            
            </div>
              
              {/foreach}
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>