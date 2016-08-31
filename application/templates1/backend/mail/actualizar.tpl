<h3>{$Tr->_("Actualizar Comunicado")} : <a href="/comunicado/?proyectoId={$proyecto.id}">{$proyecto.nombre}</a></h3>
{include file = 'backend/layout/edit.tpl'}
<form action="/comunicado/actualizar/id/{$model.id}/" onsubmit="setTexto()" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="{$model.proyectoId}" />
<input class="text" name="usuario" type="hidden" id="usuario" value="{$user_data->usr}" size="100%" height="50px"/> 
<textarea  id="texto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="texto">{$model.texto}</textarea>
<iframe id="edit" class="textiframe">Tu navegador no es compatible con Sysav</iframe>
<iframe id="colorpalette" src="/img/colors.html" style="visibility: hidden; position: absolute; left: 406px; top: 205px;" height="170" width="250"></iframe>
<br>
<input class="btn" type="submit" name="button" id="button" value="{$Tr->_("enviar")|capitalize}" />
<input class="btn" type="button" onclick="location.href='/comunicado/?proyectoId={$proyecto.id}'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
<br><br>
<input onClick="viewsource(this.checked)" type="checkbox">
View HTML Source
<input checked="checked"  onClick="usecss(this.checked)" type="checkbox">
Use CSS
<input onClick="readonly(this.checked)" type="checkbox">
Read only
</form>