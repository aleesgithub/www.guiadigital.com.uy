<?php /* Smarty version Smarty-3.1.18, created on 2016-09-01 17:00:49
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\empresa\listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:637357c5ce83c228f3-47554796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85b4bf0cd379438984ef213fd3d87144a2cdba9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\empresa\\listar.tpl',
      1 => 1472741958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '637357c5ce83c228f3-47554796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5ce83c4ea18_49936309',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'enlaces' => 0,
    'enlace' => 0,
    'key' => 0,
    'user_data' => 0,
    'actualizar' => 0,
    'direcciones' => 0,
    'rubros' => 0,
    'rubro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce83c4ea18_49936309')) {function content_57c5ce83c4ea18_49936309($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                      
<input type="hidden" value="" name="gmap_lng11" id="gmap_lng11">
<input type="hidden" value="" name="gmap_lat11" id="gmap_lat11">
<input  name="direccion" type="hidden" id="direccion"  value=""/>

           
<div class="mapa" id="map_canvas11">

</div>
<div class="empresa">
    <?php $_smarty_tpl->tpl_vars["direcciones"] = new Smarty_variable('', null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['row']->value['estado']=='Vigente') {?>
    <table width='100%'>
        <tr>
            <td width='75%'><?php echo $_smarty_tpl->tpl_vars['row']->value['empresaId'];?>
<label><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</label></td>
            <td><?php  $_smarty_tpl->tpl_vars['enlace'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enlace']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enlaces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enlace']->key => $_smarty_tpl->tpl_vars['enlace']->value) {
$_smarty_tpl->tpl_vars['enlace']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enlace']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value['empresaId']==$_smarty_tpl->tpl_vars['row']->value['id']) {?>
                            <a class="enlace" href="<?php echo $_smarty_tpl->tpl_vars['key']->value['enlace'];?>
" target="_blank"><img  src='/img/<?php echo $_smarty_tpl->tpl_vars['key']->value['tipo'];?>
.png' width='25' height='25' ></a>
                        <?php }?>
                    <?php } ?>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value->id==$_smarty_tpl->tpl_vars['row']->value['contactoId']||$_smarty_tpl->tpl_vars['user_data']->value->role=='ADM') {?>
                    <?php $_smarty_tpl->tpl_vars["actualizar"] = new Smarty_variable("<a class=\"enlace\" onclick=\"location.href='/empresa/actualizar/id/".((string)$_smarty_tpl->tpl_vars['row']->value['id'])."/'\"><img  src='/img/edit.png' width='25' height='25' ></a>", null, 0);?>
                <?php }?> 
                <?php if ($_smarty_tpl->tpl_vars['actualizar']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['actualizar']->value;?>

                <?php }?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>

            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php $_smarty_tpl->tpl_vars["direcciones"] = new Smarty_variable((((((($_smarty_tpl->tpl_vars['direcciones']->value).(";")).($_smarty_tpl->tpl_vars['row']->value['direccion'])).(",")).($_smarty_tpl->tpl_vars['row']->value['localidad'])).(",")).($_smarty_tpl->tpl_vars['row']->value['departamento']), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['row']->value['direccion']) {?><img src="/img/maps.png" width="25px" onclick="setdir('<?php echo (((($_smarty_tpl->tpl_vars['row']->value['direccion']).(",")).($_smarty_tpl->tpl_vars['row']->value['localidad'])).(",")).($_smarty_tpl->tpl_vars['row']->value['departamento']);?>
')" >
                <?php echo $_smarty_tpl->tpl_vars['row']->value['direccion'];?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value['localidad'];?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value['departamento'];?>
<?php }?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php if ($_smarty_tpl->tpl_vars['row']->value['web']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['web'];?>
" target="_blank"><img src="/img/web.png" width="25px"></a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['row']->value['telefono']) {?><img src="/img/telefono.png" width="25px" ><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['row']->value['email']) {?><img src="/img/email.png" width="25px" ><?php }?>
                
            </td>
        </tr>
        <tr>
            <td colspan="2">
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
                        <?php if ($_smarty_tpl->tpl_vars['key']->value['empresaId']==$_smarty_tpl->tpl_vars['row']->value['id']) {?>
                            <span onclick="location.href='/empresa/listar/?search=<?php echo $_smarty_tpl->tpl_vars['key']->value['subrubro'];?>
&advanced=true'" id='<?php echo $_smarty_tpl->tpl_vars['key']->value['rubroId'];?>
'><?php echo $_smarty_tpl->tpl_vars['key']->value['subrubro'];?>
</span>
                        <?php }?>
                    <?php } ?>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
        </tr>
    </table>
    <?php }?>
    <?php } ?>        
<div class="backend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</div>
<input type="hidden" name="direcciones" id="direcciones" value="<?php echo $_smarty_tpl->tpl_vars['direcciones']->value;?>
">  
<script type="text/javascript">initialize();</script><?php }} ?>
