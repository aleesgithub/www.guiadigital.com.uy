<!--
<div id="form">
 <form><h2>Quiero apuntarme</h2>
 <label>Nombre</label>
<input type="text" name="nombre" placeholder="tu texto aquí" required>
<label>Apellidos</label>
<input type="text" name="apellidos" required>
<label>Email</label>
<input type="email" name="email" required>
<label>Fecha de Inicio</label>
<input type="date" name="fechainicio" required>
<label>Página Web</label>
<input type="url" name="direccionweb">
 <input type="submit">
</form>
    
</div>
-->

<div class="divform"><br>
   
<form action="/consulta/crear/" method="post" enctype="multipart/form-data" name="consulta" id="consulta">
    <input type="hidden" name="do_submit" value="1" />
    <input  name="consulta" type="hidden" id="consulta" value="{$user_data->usr}" /> 
    <table border="0">
        <tr>
            <td><label for="nombre">{$Tr->_("Empresa ID")}</label></td>
            <td><input   name="empresaId" type="text" id="empresaId" required value="{$model.empresaId}" /></td>
        </tr>
        <tr>
            <td><label for="nombre">{$Tr->_("nombre")}</label></td>
            <td><input   name="nombre" type="text" id="nombre" required value="{$model.nombre}" /></td>
        </tr>
        <tr>
            <td><label for="apellido">{$Tr->_("apellido")} </label></td>
            <td><input  name="apellido" type="text" id="apellido"  required value="{$model.apellido}" /> </td>
        </tr>
        <tr>
            <td><label for="email">{$Tr->_("email")}</label></td>
            <td><input  name="email" type="text" id="email"  required value="{$model.email}" /></td>
        </tr>
        <tr>
            <td><label for="telefono">{$Tr->_("telefono")}</label></td>
            <td><input  name="telefono" type="text" id="telefono"  required value="{$model.telefono}"/> </td>
        </tr>
        <tr>
            <td><label for="celular">{$Tr->_("celular")}</label></td>
            <td><input  name="celular" type="text" id="celular"  required value="{$model.celular}"/></td>
        </tr>
        <tr>
            <td><label for="consulta">{$Tr->_("consulta")}</label></td>
            <td><input  name="texto" type="text" id="texto"  required value="{$model.texto}"/></td>
            
            <input class="btn" type="submit" value="{$Tr->_("guardar")|capitalize}" />
        </tr>
<!--        <tr>
            <td>
                <label for="Rubros:">Rubros:</label>
                <textarea id="allrubro" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="allrubro" class="text"  value="" ></textarea>
                <input type="hidden" id="controller" name="controller" value="{$controller}" />    
            </td>
            <td>
                <input class="mailTo" name="rubro" type="text" id="rubro" value="" placeholder="Rubro" autocomplete="off" title="Rubro"/>
                <div  id="autocompletar"></div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><ul id="rubro2" ></ul></td>
        </tr>
        <tr>
            <td>
                <label for="Enlaces:">Enlaces:</label>
                <textarea id="allenlace" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="allenlace" class="text"  value="" ></textarea>
                
            </td>
            <td>
                <input class="mailTo" name="enlace" type="text" id="enlace" value="" placeholder="Enlace" autocomplete="off" title="Enlace"/>
                
            </td>
        </tr>
        <tr>
            <td colspan="2"><ul id="enlace2" ></ul></td>
        </tr>
        <tr>
            <td><label for="telefono">{$Tr->_("telefono")|capitalize}</label></td>
            <td><input  name="telefono" type="tel" id="telefono"  required value="{$model.telefono}"/></td>
        </tr>
        <tr>
            <td><label for="celular">{$Tr->_("celular")|capitalize}</label></td>
            <td><input  name="celular" type="text" id="celular"  required value="{$model.celular}" /></td>
        </tr>
        <tr>
            <td><label for="email">{$Tr->_("email")|capitalize} </label></td>
            <td><input name="email" type="text" id="email"  required value="{$model.email}" /></td>
        </tr>
        <tr>
            <td><label for="website">{$Tr->_("web")|capitalize}</label></td>
            <td><input  name="web" type="text" id="web" required value="{$model.web}"/></td>
        </tr>
        <tr>
            <td><label for="descripcion">{$Tr->_("descripcion")|capitalize}</label></td>
            <td><textarea  name="descripcion" type="text" id="descripcion" required value="{$model.descripcion}" rows="0" cols="0" style="height: 100%; width: 100%"></textarea></td>
        </tr>
        {if $user_data->role=='ADM'}
        <tr>
            <td><label for="estado">{$Tr->_("Estado")}</label></td>
            <td>{if $model.estado==''}
                    {assign var="estado" value="Desarrollo" }
                {else}
                    {assign var="estado" value=$model.estado }
                {/if}
                <select  name="estado">{html_options options=$estados selected=$estado}</select>
            </td>
        </tr> 
        {/if}
        {if $user_data->role=='ADM'}
        <tr>
            <td>&nbsp;</td>
            <td><input  name="contactoId" type="hidden" id="contactoId" required value="{$user_data->id}" /></td>
        </tr>
        {/if}
        <tr>
            <td><input type="hidden" value="" name="gmap_lng11" id="gmap_lng11"></td>
            <td><input type="hidden" value="" name="gmap_lat11" id="gmap_lat11"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input class="btn" type="submit" value="{$Tr->_("guardar")|capitalize}" />
                <input class="btn" type="button" onclick="location.href='/proyecto/'" value="{$Tr->_("cancelar")|capitalize}" />
            </td>
        </tr>
    </table>
</form>
</div>      
            


<div   class="mapa"  id="map_canvas11">

</div>

  
   	
	 
	 
	
	
	
	<script type="text/javascript">initialize();</script>
	
    
 --!>
