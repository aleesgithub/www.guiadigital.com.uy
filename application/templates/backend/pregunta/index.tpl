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


<table width="100%">
    <tr>
        <td width="50%"><input type="button" class="btn btn-default" onclick="location.href='/pregunta/crear/proyectoId/{$proyecto.id}/'" value="{$Tr->_("Formular Pregunta")}" title="{$Tr->_("Formular Pregunta")}"></td>
        <td>{include file = 'backend/layout/search.tpl'}</td>
    </tr>
</table>
  

    {foreach $rows as $row}
        {assign var="respuesta" value=False} 
        <div class="globpreg"> 
            {$row.texto}&nbsp;<label class='lbl1'>({$row.usuario})</label>
            
        </div><br>
        {foreach $respuestas as $res}
            {if $row.id==$res.preguntaId}
                
                {assign var="respuesta" value=True} 
                
                {if $res.texto!=""}
                    <div class="globresp" > 
                        {$res.texto}&nbsp;<label class='lbl1' >({$res.usuario})</label>
                    </div>
                    <br>
                {else}
                    <div class="globresp"> 
                        <lable class='lbl1'>Respuesta asignada al usuario: </lable>{$res.usuario}
                        {if $res.usuario==$user_data->usr}
                        
                           <input type="button" class="btn" onclick="location.href='/pregunta/responder/?preguntaId={$row.id}&proyectoId={$proyecto.id}'" value="{$Tr->_("responder")|capitalize}" title="{$Tr->_("Responder Pregunta")} ({$row.nombre})">
                           <input type="button" class="btn btn-default" onclick="return confirmar('/pregunta/eliminar/id/{$row.id}/', 'Seguro desea eliminar esta pregunta?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("eliminar_Pregunta")} ({$row.nombre})">
                        {/if}
                    </div><br>
                {/if}
            {/if}
        {/foreach}
        
        
    {/foreach}

<div class="backend_paginar">{include file = 'backend/layout/pagination.tpl'}</div>