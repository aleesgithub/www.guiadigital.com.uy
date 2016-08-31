<label class="lbl1">Visualizar comunicados del </label>{$proyecto.tipo } <a href="/comunicado/?proyectoId={$proyecto.id}">{$proyecto.nombre}</a>
{include file = 'backend/layout/edit.tpl'}
<form action="/comunicado/crear/" onsubmit="setTexto()" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="{$model.proyectoId}" />

<table  border="0"  >     
    <tr>
        <td width="10%"><label class="lbl2">Comunicado:</label>
                </td>
      <td width="90%">
          
      </td>
    </tr>
     <tr>
        <td width="10%">
                </td>
      <td width="90%">
          <label class="lbl4">Asunto:</label><label class="lbl3">{$proyecto.tipo }-{$proyecto.nombre}</label>
      </td>
     </tr>
      <tr>
      <td colspan="2"><input class="text" name="usuario" type="hidden" id="usuario" value="{$user_data->usr}"/> 
          <textarea id="texto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="texto" class="text"  value="{$model.texto}" ></textarea>
          
          <iframe id="edit" class="textiframe">Tu navegador no es compatible con Sysav</iframe>
          <iframe id="colorpalette" src="/img/colors.html" style="visibility: hidden; position: absolute; left: 406px; top: 205px;" height="170" width="250"></iframe>

      </td>
    </tr>
    <tr>
        <td align="left" colspan="2">
            <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("enviar")|capitalize}" />
            <input class="btn" type="button" onclick="location.href='/comunicado/?proyectoId={$proyecto.id}'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
        </td>
    </tr>
    
</table>
<input onClick="viewsource(this.checked)" type="checkbox">
View HTML Source
<input checked="checked"  onClick="usecss(this.checked)" type="checkbox">
Use CSS
<input onClick="readonly(this.checked)" type="checkbox">
Read only
</form>




