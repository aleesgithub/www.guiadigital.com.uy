{include file = 'frontend/layout/search.tpl'}
                      
<input type="hidden" value="" name="gmap_lng11" id="gmap_lng11">
<input type="hidden" value="" name="gmap_lat11" id="gmap_lat11">
<input  name="direccion" type="hidden" id="direccion"  value=""/>

           
<div class="mapa" id="map_canvas11">

</div>
<div class="empresa">
    {assign var="direcciones" value="" }
    {foreach $rows as $row}
        {if $row.estado=='Vigente'}
    <table width='100%'>
        <tr>
            <td width='75%'><label>{$row.nombre}</label></td>
            <td>{foreach $enlaces as $enlace}
                    {foreach $enlace as $key}
                        {if $key.empresaId==$row.id}
                            <a class="enlace" href="{$key.enlace}" target="_blank"><img  src='/img/{$key.tipo}.png' width='25' height='25' ></a>
                        {/if}
                    {/foreach}
                {/foreach}
                {if $user_data->id==$row.contactoId || $user_data->role=='ADM'}
                    {assign var="actualizar" value="<a class=\"enlace\" onclick=\"location.href='/empresa/actualizar/id/{$row.id}/'\"><img  src='/img/edit.png' width='25' height='25' ></a>"}
                {/if} 
                {if $actualizar}
                    {$actualizar}
                {/if}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {$row.descripcion}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {assign var="direcciones" value=$direcciones|CAT: ";"|CAT: $row.direccion|cat: ","|cat: $row.localidad|cat: ","|cat: $row.departamento }
                {if $row.direccion}<img src="/img/maps.png" width="25px" onclick="setdir('{$row.direccion|cat: ","|cat: $row.localidad|cat: ","|cat: $row.departamento}')" >
                {$row.direccion}, {$row.localidad}, {$row.departamento}{/if}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {if $row.web}<a href="{$row.web}" target="_blank"><img src="/img/web.png" width="25px"></a>{/if}
                {if $row.telefono}<img src="/img/telefono.png" width="25px" >{/if}
                {if $row.email}<img src="/img/email.png" width="25px" >{/if}
                
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {foreach $rubros as $rubro}
                    {foreach $rubro as $key}
                        {if $key.empresaId==$row.empresaId}
                            <span onclick="location.href='/empresa/listar/?search={$key.subrubro}&advanced=true'" id='{$key.rubroId}'>{$key.subrubro}</span>
                        {/if}
                    {/foreach}
                {/foreach}
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
        </tr>
    </table>
    
        
            
            
           
        
            
            
            
               
            
            <hr>
        {/if}
    {/foreach}        
<div class="backend_paginar">{include file = 'frontend/layout/pagination.tpl'}</div>
</div>
  

<input type="hidden" name="direcciones" id="direcciones" value="{$direcciones}">  
<script type="text/javascript">initialize();</script>