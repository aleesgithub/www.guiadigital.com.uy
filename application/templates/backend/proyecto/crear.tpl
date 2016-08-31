

<form action="/proyecto/crear/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
    <tr>
      <td width="20%">  
          <strong>{$Tr->_("nombre")} (*)</strong>
      </td>
      <td>
           <input class="text"  name="nombre" type="text" id="nombre" value="{$model.nombre}" />
           <!--{html_input class='text' name='nombre' type='text' id='nombre' value=$model.nombre}-->
      </td>
    </tr>
    <tr>
      <td>  
          <strong>{$Tr->_("usuario")|capitalize} (*)</strong>
      </td>
      <td>
           <input class="text" name="usuario" type="text" id="usuario" value="{$user_data->usr}" /> 
      </td>
    </tr>
    <tr>
      <td>
          <strong>{$Tr->_("Tipo de Proyecto")} (*)</strong>
      </td>    
      <td>  
           <select class="text" name="tipo">{html_options options=$table_options selected=$tipo}</select>
      </td>    
    </tr>
    <tr>
      <td>
          <strong>{$Tr->_("Estado")} (*)</strong>
      </td>    
      <td>{if $model.estado==''}{assign var="estado" value="Desarrollo" }{else}{assign var="estado" value=$model.estado }{/if}
          
           <select class="text" name="estado">{html_options options=$estados selected=$estado}</select>
      </td>    
    </tr>
    <tr>
      <td align="center" colspan="2">{$Tr->_("campos_obligatorios")}
          <input class="btn" type="submit" name="button" id="button" value="{$Tr->_("guardar")|capitalize}" />
      <input class="btn" type="button" onclick="location.href='/proyecto/'" name="button" id="button" value="{$Tr->_("cancelar")|capitalize}" />
      </td>
    </tr>
</table>
</form>