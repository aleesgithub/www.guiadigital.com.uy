

<form action="/empresa/crear/" method="post" enctype="multipart/form-data" class="formclass">
<input type="hidden" name="do_submit" value="1" />

<table>
    <tr>
      <td width="20%">  
          <label for="nombre">{$Tr->_("nombre")}</label>
      </td>
      <td>
           <input class="text"  name="nombre" type="text" id="nombre" value="{$model.nombre}" />
           <!--{html_input class='text' name='nombre' type='text' id='nombre' value=$model.nombre}-->
           <td>  
          <strong>{$Tr->_("usuario")|capitalize} (*)</strong>
      </td>
      <td>
           <input class="text" name="usuario" type="text" id="usuario" value="{$user_data->usr}" /> 
      </td>
      </td>
    </tr>
    <tr>
      <td>
          <strong>{$Tr->_("direccion")} (*)</strong>
      </td>    
      <td>  
           <input class="text" name="direccion" type="text" id="direccion"  value="{$model.direccion}" /> 
      </td> 
      <td>
          <strong>{$Tr->_("localidad")|capitalize} (*)</strong>
      </td>    
      <td>  
           <input class="text" name="localidad" type="text" id="localidad"  value="{$model.localidad}" /> 
      </td>
    </tr>
    <tr>
        
      <td>
          <strong>{$Tr->_("departamento")|capitalize} (*)</strong>
      </td>    
      <td>  
           <input class="text" name="departamento" type="text" id="departamento"  value="{$model.departamento}" /> 
      </td>
      <td>
          <strong>{$Tr->_("pais")|capitalize} (*)</strong>
      </td>    
      <td>  
           <input class="text" name="pais" type="text" id="pais"  value="{$model.pais}" /> 
      </td>
    </tr>
    <tr>
        
      <td>
          <strong>{$Tr->_("telefono")|capitalize} (*)</strong>
      </td>    
      <td>  
          <input class="text" name="telefono" type="tel" id="telefono"  value="{$model.telefono}" /> 
      </td>
      <td>
          <strong>{$Tr->_("celular")|capitalize} (*)</strong>
      </td>    
      <td>  
          <input class="text" name="celular" type="text" id="celular"  value="{$model.celular}" /> 
      </td>
    </tr>
    <tr>
        
      <td>
          <label for="email">{$Tr->_("email")|capitalize} </label>
      </td>    
      <td>  
          <input name="email" type="text" id="email"  value="{$model.email}" />
          <span class="form_hint">Proper format "ejemplo@email.com"</span>
      </td>
      <td>
          <strong>{$Tr->_("web")|capitalize} (*)</strong>
      </td>    
      <td>  
           <input class="text" name="web" type="text" id="web"  value="{$model.web}" /> 
      </td>
    </tr>
    <tr>
        
      <td>
          <strong>{$Tr->_("descripcion")|capitalize} (*)</strong>
      </td>    
      <td>  
           <input class="text" name="descripcion" type="text" id="descripcion"  value="{$model.descripcion}" /> 
      </td>
      <td>
          <strong>{$Tr->_("rubroId")|capitalize} (*)</strong>
      </td>    
      <td>  
           <input class="text" name="rubroId" type="text" id="rubroId"  value="{$model.rubroId}" /> 
      </td>
    </tr>
    <tr>
        
      <td>
          <strong>{$Tr->_("contactoId")|capitalize} (*)</strong>
      </td>    
      <td>  
           <input class="text" name="contactoId" type="text" id="contactoId"  value="{$model.contactoId}" /> 
      </td>
      <td>
          <strong>{$Tr->_("Estado")} (*)</strong>
      </td>    
      <td>{if $model.estado==''}{assign var="estado" value="Desarrollo" }{else}{assign var="estado" value=$model.estado }{/if}
          
           <select class="text" name="estado">{html_options options=$estados selected=$estado}</select>
      </td>
    </tr>
    <tr>
        
      <td>
          <strong>{$Tr->_("latitud")|capitalize} (*)</strong>
      </td>    
      <td>  
           <input type="text" value="" name="gmap_lat11" id="gmap_lat11">	
      </td>
      <td>
          <strong>{$Tr->_("longitud")} (*)</strong>
      </td>    
      <td>
           <input type="text" value="" name="gmap_lng11" id="gmap_lng11">
      </td>
    </tr>
    <tr>
      <td align="center" colspan="4">{$Tr->_("campos_obligatorios")}
          <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" />
      <input class="btn" type="button" onclick="location.href='/proyecto/'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
      </td>
    </tr>
</table>
</form>
      
     
 
<!-- div donde se dibuja el mapa-->
<div  id="map_canvas11" style="width: 100%; height: 40%;">

</div>


  
   	
	 
	 
	
	
	
	<script type="text/javascript">initialize();</script>
	If GoogleMap doesn\'t find correctly your address, you can drag the marker to the correct position
    
 
