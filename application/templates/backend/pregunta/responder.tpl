<label class="lbl1">Visualizar preguntas de desarrollo del {$proyecto.tipo } <a href="/pregunta/?proyectoId={$proyecto.id}">{$proyecto.nombre}</a></label>

<form action="/pregunta/responder/id/{$respuesta.id}" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />


<table  border="0"  >     
    <tr>
        <td width="10%">
            <label>Referente a:</label>
        </td>
        <td width="90%">
            <label class="lbl3" >{$proyecto.tipo }-{$proyecto.nombre}</label>
        </td>
    </tr>
    <tr>
        <td width="10%">
            <label class="lbl2">Pregunta:</label>
        </td>
        <td width="90%">
            <div class="globpreg" style="width: 60%; background-color: #dde9af">{$pregunta.texto}</div>
      </td>
    </tr>
    <tr>
        <td width="10%">
            <label class="lbl2">Respuesta:</label>
        </td>
        <td width="90%">
          
        </td>
    </tr>
    <tr>
        <td colspan="2">  
            <label class="lbl1" style="font-size: 12px; color: #0000ff">(Escriba su respuesta en la siguiente &aacute;rea de texto)</label>
            <input  name="usuario" type="hidden" id="usuario" value="{$user_data->usr}"/> 
            <input  name="proyectoId" type="hidden" id="proyectoId" value="{$proyecto.id}"/>
            <input  name="preguntaId" type="hidden" id="preguntaId" value="{$pregunta.id}"/>
        </td>
    </tr>
    <tr>
      <td colspan="2">
          <textarea class="text" name="texto" cols="100" rows="10">{$respuesta.texto}</textarea>
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