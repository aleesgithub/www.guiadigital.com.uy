<?php /* Smarty version Smarty-3.1.18, created on 2015-08-11 22:37:57
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\mail\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1430055a954dd3bc1d8-59690821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c110421f71839f3f2af0861b05e0c4106e3afca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\mail\\crear.tpl',
      1 => 1439325474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1430055a954dd3bc1d8-59690821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a954dd403514_97974191',
  'variables' => 
  array (
    'model' => 0,
    'row' => 0,
    'proyecto' => 0,
    'asunto' => 0,
    'user_data' => 0,
    'rows' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a954dd403514_97974191')) {function content_55a954dd403514_97974191($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>




<div class="etiqueta">
    <div><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <table class="tbl" >
            <tr>
                
                <td>
                    
                    <input class="mailTo" name="destinatario" type="text" id="destinatario" value="Destinatario" autocomplete="off" title="Destinatario"/>
                    <hr>
                </td>

            </tr>
            <tr>
                <td >
                    <ul id="destinatario2" ></ul> 
                    <div  id="autdestinatario"></div>
                </td>
                
            </tr>
        </table>
    </div>
    <form action="/mail/crear/" onsubmit="setTexto()" method="post" enctype="multipart/form-data">
<input type="hidden" name="do_submit" value="1" />
<input type="hidden" name="proyectoId" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['proyectoId'];?>
" />
<textarea id="allto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="allto" class="text"  value="" ></textarea>

    <div id='cc<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' style='display:none' >
        <table  class="tbl">  
            <tr>
                
                <td>
                    <input class="text" name="cc" type="text" id="cc"/>
                </td>
            </tr>
            <tr>
                
                <td>
                     <input class="text" name="cco" type="text" id="cco"/>
                </td>   
            </tr>
         </table>
    </div>
    <div>    
        <table class="tbl" >  
            <tr>
               
                <td>
                    <?php $_smarty_tpl->tpl_vars["asunto"] = new Smarty_variable("Asunto", null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['proyecto']->value['nombre']) {?>
                        <?php $_smarty_tpl->tpl_vars["asunto"] = new Smarty_variable($_smarty_tpl->tpl_vars['proyecto']->value['nombre'], null, 0);?>
                    <?php }?>
                    <input class="mailTo" name="asunto" type="text" id="asunto" value="<?php echo $_smarty_tpl->tpl_vars['asunto']->value;?>
" title="Asunto"/><hr>
                </td>
            </tr>
            <tr>
                <td><input class="text" name="usuario" type="hidden" id="usuario" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
"/> 
                    <textarea id="texto" rows="0" cols="0" style="height: 0px; width: 0px; visibility: hidden" name="texto" class="text"  value="<?php echo $_smarty_tpl->tpl_vars['model']->value['texto'];?>
" >
                    
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</strong>&nbsp;&nbsp;
                        
                        <div class="nota" >
                            <?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>
<br>
                           

                        </div>
                    <?php } ?>
                    
                    </textarea>
                    <iframe id="edit" class="iframemail" >Tu navegador no es compatible con Sysav</iframe>
                    <iframe id="colorpalette" src="/img/colors.html" style="visibility: hidden; position: absolute; left: 406px; top: 205px;" height="170" width="250">
                        
                    </iframe>
                </td>
            </tr>
            <tr>
               
                <td align="left" >
                   
                    <input class="btn" type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("enviar"));?>
" />
                    <input class="btn" type="button" onclick="location.href='/mail/?proyectoId=<?php echo $_smarty_tpl->tpl_vars['proyecto']->value['id'];?>
'" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("cancelar"));?>
" />
                    
                    </td>
            </tr>
        </table>
    </div >
</div>
<input onClick="viewsource(this.checked)" type="checkbox">
View HTML Source
<input checked="checked"  onClick="usecss(this.checked)" type="checkbox">
Use CSS
<input onClick="readonly(this.checked)" type="checkbox">
Read only
</form>



<?php }} ?>
