

<form action="/comentario/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="notaId" value="{$nota.notaId}" />
<input type="hidden" name="proyectoId" value="{$nota.proyectoId}" />
<table  border="0"  >     
    <tr>
      <td width="10%" >  
          
      </td>
      <td width="90%">
          <div class="globpreg">{$nota.texto}</div>
      </td>
    </tr>
    <tr>
      <td>  
          &nbsp;
      </td>
      <td>
          <input class="text" name="usuario" type="hidden" id="usuario" value="{$user_data->usr}"/> 
      </td>
    </tr>
    <tr>
      <td colspan="2">
          <textarea class="text" name="texto" cols="100" rows="10" value="{$model.texto}"></textarea>
      </td>
    </tr>
    <tr>
        
        <td align="left" colspan="2">{$Tr->_("campos_obligatorios")}
          <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" />
          <input class="btn" type="button" onclick="location.href='/nota/?proyectoId={$nota.proyectoId}'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
      </td>
      
    </tr>
    
</table>
</form>