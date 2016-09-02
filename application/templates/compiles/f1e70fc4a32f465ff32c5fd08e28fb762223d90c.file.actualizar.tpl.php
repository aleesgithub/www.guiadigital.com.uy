<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:39:11
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\empresa\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2926857c5d2cf44f072-28555410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1e70fc4a32f465ff32c5fd08e28fb762223d90c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\empresa\\actualizar.tpl',
      1 => 1442342413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2926857c5d2cf44f072-28555410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'user_data' => 0,
    'model' => 0,
    'Tr' => 0,
    'rubros' => 0,
    'rubro' => 0,
    'allrubros' => 0,
    'key' => 0,
    'controller' => 0,
    'enlaces' => 0,
    'enlace' => 0,
    'allenlaces' => 0,
    'required' => 0,
    'estados' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5d2cf4c7bc4_13012131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5d2cf4c7bc4_13012131')) {function content_57c5d2cf4c7bc4_13012131($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?>
<div class="divform"><br>
<form action="/empresa/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" enctype="multipart/form-data" class="crearEmpresa" name="crearEmpresa" id="crearEmpresa">
    <input type="hidden" name="do_submit" value="1" />
    
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
            <label class="lbl1">Identificador:</label><label style="color: blue;"><?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
</label>
         <?php }?>
         <hr style="color: white;">
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
                <?php $_smarty_tpl->tpl_vars["allrubros"] = new Smarty_variable('', null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['rubro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rubro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rubros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rubro']->key => $_smarty_tpl->tpl_vars['rubro']->value) {
$_smarty_tpl->tpl_vars['rubro']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rubro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["allrubros"] = new Smarty_variable((($_smarty_tpl->tpl_vars['allrubros']->value).(";")).($_smarty_tpl->tpl_vars['key']->value['subrubro']), null, 0);?>
                        
                     <?php } ?>
                <?php } ?>
                <textarea id="allrubro" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="allrubro" class="text"  value="" ><?php echo $_smarty_tpl->tpl_vars['allrubros']->value;?>
</textarea>
                <input type="hidden" id="controller" name="controller" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" />
                
            </td>
            <td>
                <input class="mailTo" name="rubro" type="text" id="rubro" value="" placeholder="Ingresa un nuevo rubro" autocomplete="off" title="Rubro"/>
                <div  id="autocompletar"></div>
            </td>
        </tr>
        
        <tr>
            <td colspan="2"><ul id="rubro2" >
                
                    <?php  $_smarty_tpl->tpl_vars['rubro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rubro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rubros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rubro']->key => $_smarty_tpl->tpl_vars['rubro']->value) {
$_smarty_tpl->tpl_vars['rubro']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rubro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                        <span class='email' id='<?php echo preg_replace('!\s+!u', "&nbsp;",$_smarty_tpl->tpl_vars['key']->value['subrubro']);?>
'>
                            <li><?php echo $_smarty_tpl->tpl_vars['key']->value['subrubro'];?>
<img  src='/img/eliminarmails.png' width='15' height='15' onclick='eliminarli("<?php echo preg_replace('!\s+!u', "&nbsp;",$_smarty_tpl->tpl_vars['key']->value['subrubro']);?>
","<?php echo $_smarty_tpl->tpl_vars['key']->value['subrubro'];?>
","rubro")'></li>
                        </span>
                     <?php } ?>
                <?php } ?>
                </ul></td>
        </tr>
        <tr>
            <td>
                <label for="Enlaces:">Enlaces:</label>
                <?php $_smarty_tpl->tpl_vars["allenlaces"] = new Smarty_variable('', null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['enlace'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enlace']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enlaces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enlace']->key => $_smarty_tpl->tpl_vars['enlace']->value) {
$_smarty_tpl->tpl_vars['enlace']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enlace']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["allenlaces"] = new Smarty_variable((($_smarty_tpl->tpl_vars['allenlaces']->value).(";")).($_smarty_tpl->tpl_vars['key']->value['enlace']), null, 0);?>
                        
                     <?php } ?>
                <?php } ?>
                
                <textarea id="allenlace" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="allenlace" class="text"  value="" ><?php echo $_smarty_tpl->tpl_vars['allenlaces']->value;?>
</textarea>
                
            </td>
            <td>
                <input class="mailTo" name="enlace" type="text" id="enlace" value="" placeholder="Ingresa un nuevo enlace" autocomplete="off" title="Enlace"/>
                
            </td>
        </tr>
        <tr>
            <td colspan="2"><ul id="enlace2" >
                <?php  $_smarty_tpl->tpl_vars['enlace'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enlace']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enlaces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enlace']->key => $_smarty_tpl->tpl_vars['enlace']->value) {
$_smarty_tpl->tpl_vars['enlace']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enlace']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                        <span class='enlace' id='<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value['enlace'],"/[^A-Za-z0-9]/",'');?>
'>
                            <li><img  src='/img/<?php echo $_smarty_tpl->tpl_vars['key']->value['tipo'];?>
.png' width='20' height='20'><?php echo $_smarty_tpl->tpl_vars['key']->value['enlace'];?>
<img  src='/img/eliminarmails.png' width='15' height='15' onclick='eliminarli("<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value['enlace'],"/[^A-Za-z0-9]/",'');?>
","<?php echo $_smarty_tpl->tpl_vars['key']->value['enlace'];?>
","enlace")'></li>
                        </span>
                     <?php } ?>
                <?php } ?>
                </ul></td>
        </tr>
        
        <?php $_smarty_tpl->tpl_vars["required"] = new Smarty_variable("required", null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
           <?php $_smarty_tpl->tpl_vars["required"] = new Smarty_variable('', null, 0);?> 
        <?php }?>        <tr>
            <td><label for="telefono"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("telefono"));?>
</label></td>
            <td><input  name="telefono" type="tel" id="telefono"  required value="<?php echo $_smarty_tpl->tpl_vars['model']->value['telefono'];?>
"/></td>
        </tr>
        <tr>
            <td><label for="celular"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("celular"));?>
</label></td>
            <td><input  name="celular" type="text" id="celular"  <?php echo $_smarty_tpl->tpl_vars['required']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['model']->value['celular'];?>
" /></td>
        </tr>
        <tr>
            <td><label for="email"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("email"));?>
 </label></td>
            <td><input name="email" type="text" id="email"  <?php echo $_smarty_tpl->tpl_vars['required']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['model']->value['email'];?>
" /></td>
        </tr>
        <tr>
            <td><label for="website"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("web"));?>
</label></td>
            <td><input  name="web" type="text" id="web" <?php echo $_smarty_tpl->tpl_vars['required']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['model']->value['web'];?>
"/></td>
        </tr>
        <tr>
            <td><label for="descripcion"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("descripcion"));?>
</label></td>
            <td><textarea  name="descripcion" type="text" id="descripcion" <?php echo $_smarty_tpl->tpl_vars['required']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
" rows="0" cols="0" style="height: 100%; width: 100%"><?php echo $_smarty_tpl->tpl_vars['model']->value['descripcion'];?>
</textarea></td>
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
                <input class="btn" type="submit" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("actualizar"));?>
" />
                <input class="btn" type="button" onclick="location.href='/empresa/listar'" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
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
