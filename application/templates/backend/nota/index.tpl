<div id='cssmenu'>
<ul>
    <li {if $controlador == 'Nota'} class="active"{/if}><a href="/nota/?proyectoId={$proyecto.id}">{$Tr->_("notas")|capitalize}</a></li>
    {if $user_data->role=='ADM'}
    <li {if $controlador == 'Evaluacion'} class="active"{/if}><a href="/evaluacion/?proyectoId={$proyecto.id}">{$Tr->_("evaluaciones")|capitalize}</a></li>
    {/if}
    <li {if $controlador == 'Comunicado'} class="active"{/if}><a href="/comunicado/?proyectoId={$proyecto.id}">{$Tr->_("comunicados")|capitalize}</a></li>
    <li {if $controlador == 'Pregunta'} class="active"{/if}><a href="/pregunta/?proyectoId={$proyecto.id}">{$Tr->_("Preguntas y Respuestas")}</a></li>
</ul>
</div>
<div id='csssubmenu'>
    {include file = 'backend/layout/submenu.tpl'}
</div>
<table width="100%">
    <tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/nota/crear/proyectoId/{$proyecto.id}/'" value="{$Tr->_("Agregar Nota")}" title="{$Tr->_("Nuevo")}" {if $proyecto.estado=='Vigente'}disabled='disabled'{/if}>
            <input type="button" class="btn btn-default" onclick="location.href='/mail/crear/proyectoId/{$proyecto.id}/param/Nota'" value="{$Tr->_("Notificar")}" title="{$Tr->_("Notificar")}">
        </td>
        <td>    
            <!--{include file = 'backend/layout/search.tpl'}-->
        </td>
    </tr>
</table>
        
            {foreach $rows as $row}
                
                {assign var="disabled" value="" }
                {assign var="info" value="" }
                {if $user_data->usr!='aesteche' && $user_data->usr!='flopez' && $user_data->usr!='gacosta' && $user_data->usr!='grosas'}
                    {if $proyecto.estado!='Desarrollo' || $row.usuario!=$user_data->usr}
                        {assign var="disabled" value="disabled='disabled'" }
                        {assign var="info" value="<img src='/img/info.png' style='cursor: pointer' width='25' height='25' onclick='info(\"Las Notas pueden ser modificadas &uacute;nicamente por el usuario creador\")'>"}
                    {/if}
                {/if}
                
                <strong>{$row.nombre}</strong>&nbsp;&nbsp;
                <label class="lbl1">Creada:{$row.created|date_format:"%d/%m/%Y %H:%M:%S"} </label>
                
                <div class="nota" >{$row.texto}({$row.usuario})<br><label class="lbl1">Acceso:</label><label class="acceso"><strong>{$row.acceso}</strong> </label><br>
            
            <div id='ant{$row.id}' style='display:none'>
                <label class="lbl3">Antecedentes</label>
                {foreach $antecedentes as $nota}
                    {if $row.notaId==$nota.notaId}
                         {assign var="cantant" value=$cantant+1}
                        <div class="antecedente">{$nota.texto}<label class="lbl1"> ({$nota.usuario}) </label></div>
                        {assign var="imgant" value="<img src='/img/antecedente.png' width='30' height='100%' title='Visualizar u ocultar antecedentes' onclick='divshow(\"ant\",{$row.id})'> <label class='lbl1'>{$cantant} antecedente/s para visualizar</label>" }
                    {/if}
                {/foreach}
            </div>
            <div id='com{$row.id}' style='display:none'>
               <label class="lbl3">Comentarios</label>
                {if $comentarios}
                    
                    {foreach $comentarios as $come}
                        {if $row.notaId==$come.notaId}
                             {assign var="cantcom" value=$cantcom+1}
                            <div class="comentario">{$come.texto}<label class="lbl1"> ({$come.usuario}) {$come.created}</label></div>
                            {assign var="imgcom" value="<img src='/img/comentario.png' width='30' height='100%' title='Visualizar u ocultar comentarios' onclick='divshow(\"com\",{$row.id})'><label class='lbl1'>{$cantcom} comentario/s para visualizar</label>" }
                        {/if}
                    {/foreach}
                
                {/if}
            </div>
                
                {$imgant}{$imgcom}
            <div class="notabtn" >{$info}
                {if $row.notaId!=1}
                    <input type="button" class="btn btn-default" style="font-size: 12px" onclick="location.href='/comentario/crear/notaId/{$row.id}/'" value="{$Tr->_("comentar")|capitalize}" title="{$Tr->_("Agregar Comentario")} ({$row.nombre})"  {if $proyecto.estado!='Desarrollo'}{$disabled}{/if}>
                {/if}
                <input type="button" class="btn btn-default" style="font-size: 12px" onclick="location.href='/nota/actualizar/id/{$row.id}/'" value="{$Tr->_("editar")|capitalize}" title="{$Tr->_("Editar nota")} ({$row.nombre})" {$disabled}>
                <input type="button" class="btn btn-default" style="font-size: 12px" onclick="return confirmar('/nota/eliminar/id/{$row.id}/', 'Seguro desea eliminar la nota ({$row.nombre})?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("Eliminar Nota ")} ({$row.nombre})" {$disabled}>
            </div>
            
            </div>
              {assign var="imgant" value=""}
              {assign var="imgcom" value=""}
              {assign var="cantcom" value=""}
              {assign var="cantant" value=""}
            {/foreach}
<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>