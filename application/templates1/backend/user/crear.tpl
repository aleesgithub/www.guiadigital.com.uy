<h3>{$Tr->_("agregar_usuario")}</h3>

<form action="/user/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    <tr>
        
        
    </tr>  
    <tr>
        <td width="10%">  
            <strong>{$Tr->_("nombre")} (*)</strong>
        </td>
        <td width="40%">
            <input class="text" name="nombre" type="text" id="nombre" value="{$model.nombre}" />
        </td>
        <td width="10%">
            <strong>{$Tr->_("apellido")} (*)</strong>
        </td>
        <td width="40%">
            <input class="text" name="apellido" type="text" id="apellido" value="{$model.apellido}" />
        </td>
    </tr>
    <tr>
        <td >
            <strong>{$Tr->_("user")} (*)</strong>
        </td>
        <td >
            <input class="text" name="usr" type="text" id="usr" value="{$model.usr}" />
        </td>
        <td>
            <strong>{$Tr->_("password")} (*)</strong>
        </td>
        <td>
            <input class="text" name="pwd" type="password" id="pwd" value="{$model.pwd}" />    
        </td>    
           
    </tr>
    <tr>
        <td>
            <strong>{$Tr->_("mail")} (*)</strong>
        </td>
        <td>
            <input class="text" name="email" type="text" id="email" value="{$model.email}" />
        <td>
            <strong>{$Tr->_("idioma")} (*)</strong>
        </td>
        <td>
            <select class="text" name=language>{html_options options=$language_options selected=$language}</select>
        </td>
    </tr> 
    <tr>
        <td >
            <strong>{$Tr->_("imagen")}</strong>
        </td>
        <td >
            <input class="btn" type="file" name="imagen" id="imagen" />
        </td>
        <td>    
            <strong>{$Tr->_("rol")} (*)</strong>
        </td>
        <td>
            <select class="text" name=role><option>-- {$Tr->_("seleccione_rol")} --</option>{html_options options=$roles selected=$role}</select>
        </td> 
    </tr>
    <tr>
        <td align="center" colspan="4"><input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" /></td>
    </tr>
    <tr>
        <td align="center" colspan="4"><strong>{$Tr->_("campos_obligatorios")}</strong></td>
    </tr>
</table>
</form>