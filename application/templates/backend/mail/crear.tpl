




<div class="etiqueta">
    <div>{include file = 'backend/layout/edit.tpl'}
        <table class="tbl" >
            <tr>
                
                <td>
                    <input type="hidden" id="controller" name="controller" value="{$controller}" />
                    <input class="mailTo" name="destinatario" type="text" id="destinatario" value="Destinatario" autocomplete="off" title="Destinatario"/>
                    <hr>
                </td>

            </tr>
            <tr>
                <td >
                    <ul id="destinatario2" ></ul> 
                    <div  id="autocompletar"></div>
                </td>
                
            </tr>
        </table>
    </div>
    <form action="/mail/crear/" onsubmit="setTexto()" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="{$model.proyectoId}" />
<textarea id="allto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="allto" class="text"  value="" ></textarea>

    <div id='cc{$row.id}' style='display:none' >
        <table  class="tbl">  
            <tr>
                
                <td>
                    <input class="text" name="cc" type="text" id="cc"/>
                </td>
            </tr>
            <tr>
                
                <td>
                     <input class="text" name="cco" type="text" id="cco"/>
                </td>   
            </tr>
         </table>
    </div>
    <div>    
        <table class="tbl" >  
            <tr>
               
                <td>
                    {assign var="asunto" value="Asunto" }
                    {if $proyecto.nombre}
                        {assign var="asunto" value=$proyecto.nombre }
                    {/if}
                    <input class="mailTo" name="asunto" type="text" id="asunto" value="{$asunto}" title="Asunto"/><hr>
                </td>
            </tr>
            <tr>
                <td><input class="text" name="usuario" type="hidden" id="usuario" value="{$user_data->usr}"/> 
                    <textarea id="texto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="texto" class="text"  value="{$model.texto}" >
                    
                    {foreach $rows as $row}
                        <strong>{$row.nombre}</strong>&nbsp;&nbsp;
                        
                        <div class="nota" >
                            {$row.texto}<br>
                           

                        </div>
                    {/foreach}
                    
                    </textarea>
                    <iframe id="edit" class="iframemail" >Tu navegador no es compatible con Sysav</iframe>
                    <iframe id="colorpalette" src="/img/colors.html" style="visibility: hidden; position: absolute; left: 406px; top: 205px;" height="170" width="250">
                        
                    </iframe>
                </td>
            </tr>
            <tr>
               
                <td align="left" >
                   
                    <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("enviar")|capitalize}" />
                    <input class="btn" type="button" onclick="location.href='/mail/?proyectoId={$proyecto.id}'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
                    
                    </td>
            </tr>
        </table>
    </div >
</div>
<input onClick="viewsource(this.checked)" type="checkbox">
View HTML Source
<input checked="checked"  onClick="usecss(this.checked)" type="checkbox">
Use CSS
<input onClick="readonly(this.checked)" type="checkbox">
Read only
</form>



