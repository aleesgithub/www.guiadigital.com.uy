<h3>{$Tr->_("editar_usuario")} ({$model.usr}) <a href="/uploads/{$row.imagen}" target="_blank"><img src="/uploads/mini/{$model.imagen}"/></a></h3>

<form action="/user/actualizar/id/{$id}/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
    <td  width="10%">  
        <strong>{$Tr->_("nombre")} (*)</strong>
        
    </td>
    <td width="40%">   
        <input class="text" name="nombre" type="text" id="nombre" value="{$model.nombre}" />
    </td>
    <td width="10%">
        <strong>{$Tr->_("password")} (*)</strong>
         
    </td>
    <td width="40%">
        
        <input class="text" name="pwd" type="password" id="pwd" value="{$model.pwd|substr:0:0}" />    
    </td>
  </tr>
  <tr>
    <td>
        <strong>{$Tr->_("apellido")} (*)</strong>
        
    </td>
    <td>
        
        <input class="text" name="apellido" type="text" id="apellido" value="{$model.apellido}" />
    </td> 
    <td>    
        <strong>{$Tr->_("rol")} (*)</strong>
       
    </td> 
    <td>    
        
        <select class="text" name=role>{html_options options=$role_options selected=$role}</select>
    </td>    
  </tr>
  <tr>
    <td>
        <strong>{$Tr->_("mail")} (*)</strong>
    </td>
    <td>
        <input class="text" name="email" type="text" id="email" value="{$model.email}" />
    </td>
    <td>
        <strong>{$Tr->_("idioma")} (*)</strong>
    </td>
    <td>
        <select class="text" name=language>{html_options options=$language_options selected=$language}</select>
    </td>
  </tr>  
  <tr>
    <td colspan="2" align="right"><strong>{$Tr->_("cambiar_imagen")}</strong>
    </td>
    <td colspan="2">
        <label for="imagen"></label><input class="btn" type="file" name="imagen" id="imagen" />
    </td>
  </tr>  
  <tr>
    <td align="center" colspan="3"><input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" /></td>
  </tr>
  <tr>
    <td align="center" colspan="3"><strong>{$Tr->_("campos_obligatorios")}</strong></td>
  </tr>
</table>
</form>
