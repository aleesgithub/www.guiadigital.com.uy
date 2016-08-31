<h3>{$Tr->_("Actualizar NOTA")} : <a href="/nota/?proyectoId={$proyecto.id}">{$proyecto.nombre}</a></h3>
{include file = 'backend/layout/edit.tpl'}
<form action="/nota/actualizar/id/{$id}/" onsubmit="setTexto()" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="{$model.proyectoId}" />

<table  border="0" width="80%">     
    <tr>
      <td colspan="2">  
          
          <strong>{$Tr->_("nombre")} (*)</strong>
          <input class="text" name="nombre" type="text" id="nombre" value="{$model.nombre}" size="100%" height="50px"/> 
      </td>
       <td width="30%">
          <strong>Acceso(*)</strong>
           <select class="text" name="acceso">{html_options options=$table_options selected=$model.acceso}</select>
      </td>
    </tr>
    <tr>
      <td  colspan="2">  
          &nbsp;
      </td>
      <td>
          <input class="text" name="usuario" type="hidden" id="usuario" value="{$user_data->usr}"/> 
      </td>
    </tr>
    <tr>
      <td colspan="3">
          <!--<textarea class="text" name="texto" id="texto" cols="100" rows="10" >{$model.texto}</textarea>-->
          <textarea id="texto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="texto" class="text" >{$model.texto}</textarea>
          
          <iframe id="edit" class="textiframe">Tu navegador no es compatible con Sysav</iframe>
          <iframe id="colorpalette" src="/img/colors.html" style="visibility: hidden; position: absolute; left: 406px; top: 205px;" height="170" width="250">{$model.texto}</iframe>
      </td>
    </tr>
    <tr>
      <td align="left" colspan="3">{$Tr->_("campos_obligatorios")}
          <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" />
          <input class="btn" type="button" onclick="location.href='/nota/?proyectoId={$proyecto.id}'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
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