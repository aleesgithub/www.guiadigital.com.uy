<form action="/privilegio/actualizar/id/{$id}/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    <tr>
        
        
    </tr>  
    <tr>
        <td width="10%">  
            <strong>{$Tr->_("Controlador")} (*)</strong>
        </td>
        <td width="40%">
            <input class="text" name="controller2" type="text" id="controller2" value="{$model.controller}" />
        </td>
    </tr>
    <tr>
        <td width="10%">
            <strong>{$Tr->_("Metodo")} (*)</strong>
        </td>
        <td width="40%">
            <input class="text" name="method" type="text" id="method" value="{$model.method}" />
        </td>
    </tr>
    <tr>
        <td >
            <strong>{$Tr->_("ACL")} (*)</strong>
        </td>
        <td >
            <input class="text" name="acl" type="text" id="acl" value="{$model.acl}" />
        </td>
    </tr>
    <tr>
        <td>
            <strong>{$Tr->_("Recurso")} (*)</strong>
        </td>
        <td>
            <input class="text" name="resource" type="resource" id="pwd" value="{$model.resource}" />    
        </td>    
           
    </tr>
    
    <tr>
       
        <td>    
            <strong>{$Tr->_("rol")} (*)</strong>
        </td>
        <td>
            <select class="text" name="rolRol"><option>-- {$Tr->_("seleccione_rol")} --</option>{html_options options=$roles selected=$rolRol}</select>
        </td> 
    </tr>
    <tr>
        <td align="center" colspan="2">
            <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("actualizar")|capitalize}" />
            <input class="btn" type="button" onclick="location.href='/privilegio/'" name="button" id="button" value="{$Tr->_("volver")|capitalize}" />
        </td>
    </tr>
    <tr>
        <td align="center" colspan="2"><strong>{$Tr->_("campos_obligatorios")}</strong></td>
    </tr>
</table>
</form>