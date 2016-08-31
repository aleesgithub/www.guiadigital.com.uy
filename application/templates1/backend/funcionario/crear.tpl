<h3>Agregar Funcionario</h3>

<form action="/funcionario/crear/" method="post" enctype="multipart/form-data">
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
            <strong>C&oacute;digo(*)</strong>
        </td>
        <td >
            <input class="text" name="codigo" type="text" id="codigo" value="{$model.codigo}" />
        </td>
        <td>
            <strong>Cargo (*)</strong>
        </td>
        <td>
            <select class="text" name=cargo><option>-- {$Tr->_("seleccione_cargo")} --</option>{html_options options=$cargos selected=$cargo}</select>
            
        </td>    
           
    </tr>
    <tr>
        <td>
            <strong>{$Tr->_("mail")} (*)</strong>
        </td>
        <td>
            <input class="text" name="email" type="text" id="email" value="{$model.email}" />
        <td>
            <strong>Ingreso(*)</strong>
        </td>
        <td>
            <input class="text" name="ingreso" type="text" id="ingreso" value="{$model.ingreso}" />
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
            <strong>Estado (*)</strong>
        </td>
        <td>
            <select class="text" name=estado><option>-- {$Tr->_("seleccione_estado")} --</option>{html_options options=$estados selected=$estado}</select>
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