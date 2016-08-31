<div id='cssmenu'>
<ul>
    <li {if $controlador == 'Nota'} class="active"{/if}><a href="/nota/?proyectoId={$proyecto.id}">{$Tr->_("notas")|capitalize}</a></li>
    <li {if $controlador == 'Evaluacion'} class="active"{/if}><a href="/evaluacion/?proyectoId={$proyecto.id}">{$Tr->_("evaluaciones")|capitalize}</a></li>
    <li {if $controlador == 'Comunicado'} class="active"{/if}><a href="/comunicado/?proyectoId={$proyecto.id}">{$Tr->_("comunicados")|capitalize}</a></li>
    <li {if $controlador == 'Pregunta'} class="active"{/if}><a href="/pregunta/?proyectoId={$proyecto.id}">{$Tr->_("Preguntas y Respuestas")}</a></li>
</ul>
</div>
<table width="100%">
    <tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/nota/crear/proyectoId/{$proyecto.id}/'" value="{$Tr->_("Agregar Nota")}" title="{$Tr->_("Nuevo")}">
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
                <strong>{$row.nombre}</strong>&nbsp;&nbsp;<label class="lbl1">Creada:{$row.created|date_format:"%d/%m/%Y %H:%M:%S"} -- Actualizada:{$row.updated|date_format:"%d/%m/%Y %H:%M:%S"}</label>
                Est.:{$row.estado}
            <div class="nota" >{$row.texto}({$row.usuario})<br>
            <div id='{$row.id}' style='display:none'>
                {foreach $antecedentes as $nota}
                    {if $row.notaId==$nota.notaId}
                        <div class="antecedente">{$nota.texto}<label class="lbl1"> ({$nota.usuario})</label></div>
                    {/if}
                {/foreach}
            </div>
                <img src="/img/comentario.png" width="30" height="100%" title="Visualizar u ocultar comentarios" onclick="antecedenteNota({$row.id})">
                <img src="/img/antecedente.png" width="30" height="100%" title="Visualizar u ocultar antecedentes de la nota">
            <div class="notabtn" >{$info}
                <input type="button" class="btn btn-default"  onclick="location.href='/nota/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("Editar nota")} ({$row.nombre})" {$disabled}>
                <input type="button" class="btn btn-default" onclick="return confirmar('/nota/eliminar/id/{$row.id}/', 'Seguro desea eliminar la nota ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("Eliminar Nota ")} ({$row.nombre})" {$disabled}>
            </div>
            
            </div>
              
            {/foreach}
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>