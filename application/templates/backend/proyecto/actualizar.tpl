

<form action="/proyecto/actualizar/id/{$id}/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
    <td colspan="2">  
        <strong>{$Tr->_("nombre")} (*)</strong>
        
    </td>
    <td>
         <input class="text" name="nombre" type="text" id="nombre" value="{$model.nombre}" /> 
    </td>
  </tr>
  <tr>
    <td colspan="2">  
        <strong>{$Tr->_("Cod. Referencia")} (*)</strong>
        
    </td>
    <td>
         <input class="text" name="codRef" type="text" id="codRef" value="{$model.codRef}" /> 
    </td>
  </tr>
   <tr>
    <td colspan="2">  
        <strong>{$Tr->_("usuario")|capitalize} (*)</strong>
        
    </td>
    <td>
         <input class="text" name="usuario" type="text" id="usuario" value="{$model.usuario}" /> 
    </td>
  </tr>
  <tr>
    <td colspan="2">
     <strong>{$Tr->_("Tipo de Proyecto")} (*)</strong>
       
    </td>    
    <td>  
         <select class="text" name=tipo>{html_options options=$table_options selected=$model.tipo}</select>
 
            </td>    
  </tr> 
  <tr>
      <td colspan="2">
          <strong>{$Tr->_("Estado")} (*)</strong>
      </td>    
      <td>  
           <select class="text" name="estado">{html_options options=$estados selected=$model.estado}</select>
      </td>    
    </tr>
  <tr>
    <td align="center" colspan="3">
        {$Tr->_("campos_obligatorios")}
        
        <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" />
        <input class="btn" type="button" onclick="location.href='/nota/?proyectoId={$model.id}'" name="buttonnota" id="buttonnota" value="Ver Notas" />
        <input class="btn" type="button" onclick="location.href='/proyecto/?estado={$model.estado}'" name="buttoncancelar" id="buttonproyecto" value="{$Tr->_("cancelar")|capitalize}" />
    </td>
 </tr>
  
</table>
    
</form>
    
    <table>
        <tr>
            <td width="30%">
                <label class="lbl4">Usuario:</label>
                
            </td>
            <td>
                <label class="lbl4">E-mail:</label>
                
            </td>
        </tr>
        {foreach $users as $usr}
            {assign var="exist" value=0 }
            {if $usr.usr==$model.usuario}{assign var="exist" value=1 }{/if}
            {foreach $colaboradores as $col}
                {if $col.usuario==$usr.usr }{assign var="exist" value=1 }{/if}
             {/foreach}    
                {if !$exist}
                    <tr>
                        <td>
                            {$usr.usr}
                        </td>
                        <td>
                            {$usr.email}
                        </td>
                        <td align="center" >
                            <input class="btn" type="button" onclick="location.href='/proyecto/addcol/?usr={$usr.usr}&id={$model.id}&nombre={$model.nombre}&email={$usr.email}'" name="button" id="button" style="font-size: 12px;" value="{$Tr->_("Invitar Usuario")|capitalize}" />
                        </td>
                    </tr>
                {/if}
           
        {/foreach}
    </table>
    <label class="lbl2">Participantes del Proyecto</label>
    <table>
        <tr>
            <td width="20%">
                <label class="lbl4">Usuario:</label>
            </td>
            <td width="30%">
                <label class="lbl4">Desde:</label>
            </td>
        </tr>
        <tr>
                <td>
                    <input class="btn" type="button" name="button" id="button" style="font-size: 14px;" value="{$model.usuario} " disabled/>
                </td>
                <td>
                    <label class="lbl5">{$model.created}</label>
                </td>
            </tr>
        
        {foreach $colaboradores as $col}
            
            <tr>
                <td>
                    <input class="btn" type="button" name="button" id="button" style="font-size: 14px;" value="{$col.usuario} " disabled/>
                </td>
                <td>
                    <label class="lbl5">{$col.created}</label>
                </td>
            </tr>
           
        {/foreach}
     
    </table>
    
