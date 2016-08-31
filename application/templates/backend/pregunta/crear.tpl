<label class="lbl1">Visualizar preguntas de desarrollo del {$proyecto.tipo } <a href="/pregunta/?proyectoId={$proyecto.id}">{$proyecto.nombre}</a></label>

<form action="/pregunta/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="{$model.proyectoId}" />

<table  border="0"  >     
    <tr>
        <td width="10%"><label class="lbl2">Pregunta:</label>
                </td>
      <td width="90%">
          
      </td>
    </tr>
     <tr>
        <td width="10%"><label class="lbl4">Asunto:</label>
                </td>
      <td width="90%">
          <label class="lbl3">{$proyecto.tipo }-{$proyecto.nombre}</label>
      </td>
     </tr>
      <tr>
      <td align="rigth">
          <label class="lbl4">Para:</label>
      </td>
      <td>
          <select id="asignada" name="asignada" class="slt lbl2">{html_options options=$usuarios selected= $model.usuarioId} </select>
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
          <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("enviar")|capitalize}" />
          <input class="btn" type="button" onclick="location.href='/pregunta/?proyectoId={$proyecto.id}'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
      </td>
    </tr>
    
</table>
</form>