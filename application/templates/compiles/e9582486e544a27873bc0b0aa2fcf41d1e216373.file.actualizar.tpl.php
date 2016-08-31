<?php /* Smarty version Smarty-3.1.18, created on 2015-07-03 21:57:27
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\proyecto\actualizar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784954aaf582b44ca5-13437831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9582486e544a27873bc0b0aa2fcf41d1e216373' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\proyecto\\actualizar.tpl',
      1 => 1435953411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784954aaf582b44ca5-13437831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54aaf582babb88_00247701',
  'variables' => 
  array (
    'id' => 0,
    'Tr' => 0,
    'model' => 0,
    'table_options' => 0,
    'estados' => 0,
    'users' => 0,
    'usr' => 0,
    'colaboradores' => 0,
    'col' => 0,
    'exist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aaf582babb88_00247701')) {function content_54aaf582babb88_00247701($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?>

<form action="/proyecto/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table class="table">
  <tr>
    <td colspan="2">  
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("nombre");?>
 (*)</strong>
        
    </td>
    <td>
         <input class="text" name="nombre" type="text" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
" /> 
    </td>
  </tr>
  <tr>
    <td colspan="2">  
        <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Cod. Referencia");?>
 (*)</strong>
        
    </td>
    <td>
         <input class="text" name="codRef" type="text" id="codRef" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['codRef'];?>
" /> 
    </td>
  </tr>
   <tr>
    <td colspan="2">  
        <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("usuario"));?>
 (*)</strong>
        
    </td>
    <td>
         <input class="text" name="usuario" type="text" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['usuario'];?>
" /> 
    </td>
  </tr>
  <tr>
    <td colspan="2">
     <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Tipo de Proyecto");?>
 (*)</strong>
       
    </td>    
    <td>  
         <select class="text" name=tipo><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['table_options']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['tipo']),$_smarty_tpl);?>
</select>
 
            </td>    
  </tr> 
  <tr>
      <td colspan="2">
          <strong><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Estado");?>
 (*)</strong>
      </td>    
      <td>  
           <select class="text" name="estado"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['model']->value['estado']),$_smarty_tpl);?>
</select>
      </td>    
    </tr>
  <tr>
    <td align="center" colspan="3">
        <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("campos_obligatorios");?>

        
        <input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("guardar"));?>
" />
        <input class="btn" type="button" onclick="location.href='/nota/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
'" name="buttonnota" id="buttonnota" value="Ver Notas" />
        <input class="btn" type="button" onclick="location.href='/proyecto/?estado=<?php echo $_smarty_tpl->tpl_vars['model']->value['estado'];?>
'" name="buttoncancelar" id="buttonproyecto" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
    </td>
 </tr>
  
</table>
    
</form>
    
    <table>
        <tr>
            <td width="30%">
                <label class="lbl4">Usuario:</label>
                
            </td>
            <td>
                <label class="lbl4">E-mail:</label>
                
            </td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['usr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usr']->key => $_smarty_tpl->tpl_vars['usr']->value) {
$_smarty_tpl->tpl_vars['usr']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["exist"] = new Smarty_variable(0, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['usr']->value['usr']==$_smarty_tpl->tpl_vars['model']->value['usuario']) {?><?php $_smarty_tpl->tpl_vars["exist"] = new Smarty_variable(1, null, 0);?><?php }?>
            <?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colaboradores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['col']->value['usuario']==$_smarty_tpl->tpl_vars['usr']->value['usr']) {?><?php $_smarty_tpl->tpl_vars["exist"] = new Smarty_variable(1, null, 0);?><?php }?>
             <?php } ?>    
                <?php if (!$_smarty_tpl->tpl_vars['exist']->value) {?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['usr']->value['usr'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['usr']->value['email'];?>

                        </td>
                        <td align="center" >
                            <input class="btn" type="button" onclick="location.href='/proyecto/addcol/?usr=<?php echo $_smarty_tpl->tpl_vars['usr']->value['usr'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
&nombre=<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
&email=<?php echo $_smarty_tpl->tpl_vars['usr']->value['email'];?>
'" name="button" id="button" style="font-size: 12px;" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("Invitar Usuario"));?>
" />
                        </td>
                    </tr>
                <?php }?>
           
        <?php } ?>
    </table>
    <label class="lbl2">Participantes del Proyecto</label>
    <table>
        <tr>
            <td width="20%">
                <label class="lbl4">Usuario:</label>
            </td>
            <td width="30%">
                <label class="lbl4">Desde:</label>
            </td>
        </tr>
        <tr>
                <td>
                    <input class="btn" type="button" name="button" id="button" style="font-size: 14px;" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['usuario'];?>
 " disabled/>
                </td>
                <td>
                    <label class="lbl5"><?php echo $_smarty_tpl->tpl_vars['model']->value['created'];?>
</label>
                </td>
            </tr>
        
        <?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colaboradores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
            
            <tr>
                <td>
                    <input class="btn" type="button" name="button" id="button" style="font-size: 14px;" value="<?php echo $_smarty_tpl->tpl_vars['col']->value['usuario'];?>
 " disabled/>
                </td>
                <td>
                    <label class="lbl5"><?php echo $_smarty_tpl->tpl_vars['col']->value['created'];?>
</label>
                </td>
            </tr>
           
        <?php } ?>
     
    </table>
    
<?php }} ?>
