<?php /* Smarty version Smarty-3.1.18, created on 2016-09-01 18:56:00
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\empresa\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:648157c85da075ab97-10088615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c087e2ada8045b60d0f816efe063b16f7f3f5001' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\empresa\\crear.tpl',
      1 => 1441991987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '648157c85da075ab97-10088615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'Tr' => 0,
    'model' => 0,
    'controller' => 0,
    'estados' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c85da07b7002_72144012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c85da07b7002_72144012')) {function content_57c85da07b7002_72144012($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><!--
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
<form action="/empresa/crear/" method="post" enctype="multipart/form-data" class="crearEmpresa" name="crearEmpresa" id="crearEmpresa">
    <input type="hidden" name="do_submit" value="1" />
    <input  name="usuario" type="hidden" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
" /> 
    <table border="0">
        <tr>
            <td><label for="nombre"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
</label></td>
            <td><input   name="nombre" type="text" id="nombre" required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" placeholder="Pedro Su&aacute;rez" /></td>
        </tr>
        <tr>
            <td><label for="direccion"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("direccion");?>
 </label></td>
            <td><input  name="direccion" type="text" id="direccion"  required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['direccion'];?>
" placeholder="Av. 18 de jlio 23456"/> </td>
        </tr>
        <tr>
            <td><label for="localidad"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("localidad/Barrio"));?>
</label></td>
            <td><input  name="localidad" type="text" id="localidad"  required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['localidad'];?>
" placeholder="Centro"/></td>
        </tr>
        <tr>
            <td><label for="departamento"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("departamento"));?>
</label></td>
            <td><input  name="departamento" type="text" id="departamento"  required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['departamento'];?>
" placeholder="Montevideo"/> </td>
        </tr>
        <tr>
            <td><label for="pais"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("pais"));?>
</label></td>
            <td><input  name="pais" type="text" id="pais"  required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['pais'];?>
" placeholder="Uruguay"/></td>
        </tr>
        <tr>
            <td>
                <label for="Rubros:">Rubros:</label>
                <textarea id="allrubro" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="allrubro" class="text"  value="" ></textarea>
                <input type="hidden" id="controller" name="controller" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" />    
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
            <td><label for="telefono"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("telefono"));?>
</label></td>
            <td><input  name="telefono" type="tel" id="telefono"  required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['telefono'];?>
"/></td>
        </tr>
        <tr>
            <td><label for="celular"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("celular"));?>
</label></td>
            <td><input  name="celular" type="text" id="celular"  required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['celular'];?>
" /></td>
        </tr>
        <tr>
            <td><label for="email"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("email"));?>
 </label></td>
            <td><input name="email" type="text" id="email"  required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['email'];?>
" /></td>
        </tr>
        <tr>
            <td><label for="website"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("web"));?>
</label></td>
            <td><input  name="web" type="text" id="web" required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['web'];?>
"/></td>
        </tr>
        <tr>
            <td><label for="descripcion"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("descripcion"));?>
</label></td>
            <td><textarea  name="descripcion" type="text" id="descripcion" required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
" rows="0" cols="0" style="height: 100%; width: 100%"></textarea></td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
        <tr>
            <td><label for="estado"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Estado");?>
</label></td>
            <td><?php if ($_smarty_tpl->tpl_vars['model']->value['estado']=='') {?>
                    <?php $_smarty_tpl->tpl_vars["estado"] = new Smarty_variable("Desarrollo", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["estado"] = new Smarty_variable($_smarty_tpl->tpl_vars['model']->value['estado'], null, 0);?>
                <?php }?>
                <select  name="estado"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado']->value),$_smarty_tpl);?>
</select>
            </td>
        </tr> 
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
        <tr>
            <td>&nbsp;</td>
            <td><input  name="contactoId" type="hidden" id="contactoId" required value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->id;?>
" /></td>
        </tr>
        <?php }?>
        <tr>
            <td><input type="hidden" value="" name="gmap_lng11" id="gmap_lng11"></td>
            <td><input type="hidden" value="" name="gmap_lat11" id="gmap_lat11"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input class="btn" type="submit" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" />
                <input class="btn" type="button" onclick="location.href='/proyecto/'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
            </td>
        </tr>
    </table>
</form>
</div>      
            


<div   class="mapa"  id="map_canvas11">

</div>

  
   	
	 
	 
	
	
	
	<script type="text/javascript">initialize();</script>
	
    
 
<?php }} ?>
