<h3>{$Tr->_("Actualizar NOTA")} : <a href="/nota/?proyectoId={$proyecto.id}">{$proyecto.nombre}</a></h3>

<form action="/capitulo/actualizar/id/{$id}/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="{$model.proyectoId}" />

<table>     
    <tr>
      <td width="10%">  
          <strong>{$Tr->_("nombre")} (*)</strong>
      </td>
      <td width="90%">
          <input class="text" name="nombre" type="text" id="nombre" value="{$model.nombre}" size="100%" height="50px"/> 
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
          <textarea class="text" name="texto" id="texto" cols="100" rows="10" >{$model.texto}</textarea>
      </td>
    </tr>
    <tr>
      <td align="left" colspan="2">{$Tr->_("campos_obligatorios")}
          <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" />
          <input class="btn" type="button" onclick="location.href='/nota/?proyectoId={$proyecto.id}'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
      </td>
    </tr>
   
</table>
</form>