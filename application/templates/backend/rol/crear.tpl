<h3>Agregar Rol</h3>

<form action="/rol/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    
    <tr>
        <td width="5%">  
            <strong>Rol (*)</strong>
        </td>
        <td width="20%">
            <input class="text" name="rol" type="text" id="rol" value="{$model.rol}" />
        </td>
        <td width="5%">
            <strong>Leyenda (*)</strong>
        </td>
        <td width="20%">
            <input class="text" name="leyenda" type="text" id="leyenda" value="{$model.leyenda}" />
        </td>
         <td width="5%">
            <strong>Observaciones (*)</strong>
        </td>
        <td width="45%">
            <input class="text" name="observaciones" type="text" id="observaciones" value="{$model.observaciones}" />
        </td>
    </tr>
    <tr>
        <td align="center" colspan="6"><input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" /></td>
    </tr>
    <tr>
        <td align="center" colspan="4"><strong>{$Tr->_("campos_obligatorios")}</strong></td>
    </tr>
</table>
</form>