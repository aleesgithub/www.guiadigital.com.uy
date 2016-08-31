<?php /* Smarty version Smarty-3.1.18, created on 2015-08-20 20:32:25
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\mail\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3102055d61d399f4cb5-19788532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406d557bedd928f02ec73519302d1ff4b85d2b95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\mail\\index.tpl',
      1 => 1440011669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3102055d61d399f4cb5-19788532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Tr' => 0,
    'rows' => 0,
    'enviados' => 0,
    'env' => 0,
    'row' => 0,
    'listmail' => 0,
    'recibidos' => 0,
    'rec' => 0,
    'mailrec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61d39aa4bd9_11557082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61d39aa4bd9_11557082')) {function content_55d61d39aa4bd9_11557082($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?>


    
<table width="100%">
    <tr>
        <td width="50%">
            <input type="button" class="btn btn-default" onclick="location.href='/mail/crear/'" value="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Enviar Notificaci&oacute;n");?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Enviar Notificaci&oacute;n");?>
">
        </td>
        <td><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
    </tr>
</table>
<label class="lbl4">Enviados</label>
<div class="divmail">
    <table class="table">
        <tr>
          <th width="25%" align="center"><strong> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("para"));?>
</strong></th>
          <th width="40%" align="center">Asunto</th>
          <th width="20%" align="center"><strong> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("fecha"));?>
</strong></th>
          <th width="15%" align="right"></th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td><?php $_smarty_tpl->tpl_vars["listmail"] = new Smarty_variable('', null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['env'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['env']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enviados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['env']->key => $_smarty_tpl->tpl_vars['env']->value) {
$_smarty_tpl->tpl_vars['env']->_loop = true;
?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['env']->value['mailId']==$_smarty_tpl->tpl_vars['row']->value['id']) {?>
                               <?php $_smarty_tpl->tpl_vars["listmail"] = new Smarty_variable((($_smarty_tpl->tpl_vars['listmail']->value).($_smarty_tpl->tpl_vars['env']->value['email'])).('<br>'), null, 0);?>
                            <?php }?>
                        <?php } ?>
                        <div class="limited"><?php echo $_smarty_tpl->tpl_vars['listmail']->value;?>
</div>
                    </td>

                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['asunto'],120,"...",true);?>
</td>
                        <!--<textarea id="texto0" class="p4" onmouseout="javascript:document.getElementById('flotante').style.display='none';" onmousemove="mostrarmsj(event);" onmouseover="mostrarmsj(event,'asd<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');" rows="1" readonly="readonly" name="texto0"></textarea>-->

                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
                    <td> <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable('', null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['estado']!='Desarrollo') {?> <?php $_smarty_tpl->tpl_vars["disabled"] = new Smarty_variable("disabled='disabled'", null, 0);?><?php }?>
                         
                      <input type="button" class="btn btn-default" onclick="cargarMail(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("visualizar"));?>
">
                      <!--<input type="button" class="btn btn-default" onclick="return confirmar('/mail/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar este email?')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("eliminar"));?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("eliminar_mail");?>
)">      -->
                    </td>
                </tr>
        <?php } ?>
    </table>
</div><hr><label class="lbl4">Recibidos</label>
 <div class="divmail">   

<table class="table">
    <tr>
        <th width="25%" align="center"><strong> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("de"));?>
</strong></td>
        <th width="40%" align="center"><strong> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("asunto"));?>
</strong></td>
        <th width="20%" align="center"><strong> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("fecha"));?>
</strong></td>
        <th width="15%" align="right"></td>
    </tr>
    <?php $_smarty_tpl->tpl_vars["mailrec"] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recibidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->key => $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['env'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['env']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enviados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['env']->key => $_smarty_tpl->tpl_vars['env']->value) {
$_smarty_tpl->tpl_vars['env']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['env']->value['estado']=='Pendiente'&&$_smarty_tpl->tpl_vars['rec']->value['id']==$_smarty_tpl->tpl_vars['env']->value['mailId']) {?>
            <?php $_smarty_tpl->tpl_vars["mailrec"] = new Smarty_variable($_smarty_tpl->tpl_vars['mailrec']->value+1, null, 0);?>
            <?php $_smarty_tpl->tpl_vars["style"] = new Smarty_variable('font: bold', null, 0);?>
            <?php }?>
        <?php } ?>    
                       
        <tr id="tr<?php echo $_smarty_tpl->tpl_vars['rec']->value['id'];?>
" >
            <td><?php echo $_smarty_tpl->tpl_vars['rec']->value['usuario'];?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['rec']->value['asunto'],120,"...",true);?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rec']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
                <td>
                    <input type="button" class="btn btn-default" onclick="cargarMail(<?php echo $_smarty_tpl->tpl_vars['rec']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['env']->value['email'];?>
')" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("visualizar"));?>
">
                </td>
            </tr> 
        
    <?php } ?>
    
</table>
</div><hr>
 <div class="divmailver"> 
     <iframe id="edit" class="iframemailindex" ></iframe>
 </div><?php }} ?>
