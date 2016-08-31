


    
<table width="100%">
    <tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/mail/crear/'" value="{$Tr->_("Enviar Notificaci&oacute;n")}" title="{$Tr->_("Enviar Notificaci&oacute;n")}">
        </td>
        <td>{include file = 'backend/layout/search.tpl'}</td>
    </tr>
</table>
<label class="lbl4">Enviados</label>
<div class="divmail">
    <table class="table">
        <tr>
          <th width="25%" align="center"><strong> {$Tr->_("para")|capitalize}</strong></th>
          <th width="40%" align="center">Asunto</th>
          <th width="20%" align="center"><strong> {$Tr->_("fecha")|capitalize}</strong></th>
          <th width="15%" align="right"></th>
        </tr>
        {foreach $rows as $row}
                <tr>
                    <td>{assign var="listmail" value=''}
                        {foreach $enviados as $env}
                            
                            {if $env.mailId==$row.id}
                               {assign var="listmail" value=$listmail|CAT:$env.email|CAT:'<br>'}
                            {/if}
                        {/foreach}
                        <div class="limited">{$listmail}</div>
                    </td>

                    <td>{$row.asunto|truncate:120:"...":true}</td>
                        <!--<textarea id="texto0" class="p4" onmouseout="javascript:document.getElementById('flotante').style.display='none';" onmousemove="mostrarmsj(event);" onmouseover="mostrarmsj(event,'asd{$row.id}');" rows="1" readonly="readonly" name="texto0"></textarea>-->

                    <td>{$row.created|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                    <td> {assign var="disabled" value="" }
                        {if $row.estado!='Desarrollo'} {assign var="disabled" value="disabled='disabled'" }{/if}
                         
                      <input type="button" class="btn btn-default" onclick="cargarMail({$row.id})" value="{$Tr->_("visualizar")|capitalize}">
                      <!--<input type="button" class="btn btn-default" onclick="return confirmar('/mail/eliminar/id/{$row.id}/', 'Seguro desea eliminar este email?')" value="{$Tr->_("eliminar")|capitalize}" title="{$Tr->_("eliminar_mail")})">      -->
                    </td>
                </tr>
        {/foreach}
    </table>
</div><hr><label class="lbl4">Recibidos</label>
 <div class="divmail">   

<table class="table">
    <tr>
        <th width="25%" align="center"><strong> {$Tr->_("de")|capitalize}</strong></td>
        <th width="40%" align="center"><strong> {$Tr->_("asunto")|capitalize}</strong></td>
        <th width="20%" align="center"><strong> {$Tr->_("fecha")|capitalize}</strong></td>
        <th width="15%" align="right"></td>
    </tr>
    {assign var="mailrec" value=0 }
    {foreach $recibidos as $rec}
        {foreach $enviados as $env}
            {if $env.estado=='Pendiente' && $rec.id==$env.mailId}
            {assign var="mailrec" value=$mailrec+1 }
            {assign var="style" value= 'font: bold'}
            {/if}
        {/foreach}    
                       
        <tr id="tr{$rec.id}" >
            <td>{$rec.usuario}</td>
                <td>{$rec.asunto|truncate:120:"...":true}</td>
                <td>{$rec.created|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                <td>
                    <input type="button" class="btn btn-default" onclick="cargarMail({$rec.id},'{$env.email}')" value="{$Tr->_("visualizar")|capitalize}">
                </td>
            </tr> 
        
    {/foreach}
    
</table>
</div><hr>
 <div class="divmailver"> 
     <iframe id="edit" class="iframemailindex" ></iframe>
 </div>