<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:48
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\report\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2320853d577b7aade94-80906610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd99eb426d2f807836b9a9b753e43966e9bb9509' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\report\\index.tpl',
      1 => 1408055230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2320853d577b7aade94-80906610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d577b7afc090_60629469',
  'variables' => 
  array (
    'Tr' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'detalle' => 0,
    'rows' => 0,
    'row' => 0,
    'key' => 0,
    'val' => 0,
    'espectaculos' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d577b7afc090_60629469')) {function content_53d577b7afc090_60629469($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><h3><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("reportes"));?>
</h3>

<form action="/report/" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />

<table>
    <tr>
        <td>
            <table class="table">
              <tr>
                <td colspan="3" align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("seleccione_categoria");?>
:
                    <select name=categoria><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categorias']->value,'selected'=>$_smarty_tpl->tpl_vars['categoria']->value),$_smarty_tpl);?>
</select>
                </td>
              </tr>  
                
              <tr>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_($_smarty_tpl->tpl_vars['detalle']->value);?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("total_entradas");?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("total_facturado");?>
</td>
              </tr>
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
              <tr>
                <?php if ($_smarty_tpl->tpl_vars['detalle']->value=='Categoria') {?>
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>       
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['categoriaId']==$_smarty_tpl->tpl_vars['key']->value) {?> <td align="center"><a href="http://www.ticketweb.com.uy:8181/report?categoria=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</a></td> <?php }?>
                <?php } ?>
                <?php } else { ?>
                 <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['espectaculos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>       
                     <?php if ($_smarty_tpl->tpl_vars['row']->value['espectaculoId']==$_smarty_tpl->tpl_vars['key']->value) {?> <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td> <?php }?>
                <?php } ?>
                <?php }?> 
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['sum_cantidad'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['sum_facturado'];?>
</td>
              </tr>
              <?php } ?>
              <tr>
                <td colspan="3"><center><input type="submit" name="button" id="button" value="Generar" /></center></td>
            </tr> 
            </table>
        </td>
        <td>
           
                <img src="http://www.ticketweb.com.uy:8181/report/getgraphicscantidad?categoria=<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
" />
                <img src="http://www.ticketweb.com.uy:8181/report/getgraphicsfactura?categoria=<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
" />
           
        </td>
    </tr>
</table>
            <div id="mensaje"></div>

                  

</form><?php }} ?>
