<div id='cssmenu'>
<ul>
    <li {if $controller == 'Nota'} class="active"{/if}><a href="/nota/?proyectoId={$proyecto.id}">{$Tr->_("notas")|capitalize}</a></li>
    <li {if $controller == 'Evaluacion'} class="active"{/if}><a href="/evaluacion/?proyectoId={$proyecto.id}">{$Tr->_("evaluaciones")|capitalize}</a></li>
    <li {if $controller == 'Comunicado'} class="active"{/if}><a href="/comunicado/?proyectoId={$proyecto.id}">{$Tr->_("comunicados")|capitalize}</a></li>
    <li {if $controller == 'Pregunta'} class="active"{/if}><a href="/pregunta/?proyectoId={$proyecto.id}">{$Tr->_("Preguntas y Respuestas")}</a></li>
    
</ul>
    
</div>
<div id='csssubmenu'>
    {include file = 'backend/layout/submenu.tpl'}
</div>

<table width="100%"><tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/evaluacion/crear/proyectoId/{$proyecto.id}/'" value="{$Tr->_("Agregar Evaluacion")}" title="{$Tr->_("Agregar Evaluacion")}">
        </td>
        <td>
            <!--{include file = 'backend/layout/search.tpl'}-->
        </td>
    </tr>
</table>
   <table border="0"  width="100%" class="table table-hover">
  {foreach $rows as $row}
    
   
        <tr>
            <td width="90%" align="left"  colspan="2"><strong>{$row.nombre}</strong>&nbsp;&nbsp;<label class="lbl1">Creada:{$row.created|date_format:"%d/%m/%Y %H:%M:%S"} -- Actualizada:{$row.updated|date_format:"%d/%m/%Y %H:%M:%S"}</label></td>
            <td width="10%"> Est.:{$row.estado}</td>
            
        </tr>
        <tr>
            <td  class="textarea" colspan="2">{$row.texto}({$row.usuario})</td>
            <td><input type="button" class="btn btn-default" onclick="location.href='/evaluacion/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("editar_evaluacion")} ({$row.nombre})">
                <input type="button" class="btn btn-default" onclick="location.href='/mail/crear/proyectoId/{$proyecto.id}/param/Evaluacion/paramId/{$row.id}'" value="{$Tr->_("notificar")|capitalize}" title="{$Tr->_("notificar")} ({$row.nombre})">
                <input type="button" class="btn btn-default" onclick="return confirmar('/evaluacion/eliminar/id/{$row.id}/', 'Seguro desea eliminar el evaluacion ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("eliminar_usuario")} ({$row.nombre})"></td>
        </tr>
        
        
    
        
  {/foreach}</table>
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>