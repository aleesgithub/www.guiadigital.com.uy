<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:25
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\layout\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1851453d49e265f6c58-99888928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95c938513a402175db79aeaa5b25f24bc9089ae6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\layout\\footer.tpl',
      1 => 1407804050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1851453d49e265f6c58-99888928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e265fe958_07327563',
  'variables' => 
  array (
    'Tr' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e265fe958_07327563')) {function content_53d49e265fe958_07327563($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="backend_footer">

    <table class="table">
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("sitio_realizado_por");?>
 : Pedro Esteche N&ordm; 147874, Eduardo Sangiao N&ordm; 66391 ,Sergio Juani N&ordm; 183171</td>
            <td align="right">
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value->usr) {?>
                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("usuario"));?>
: <strong><?php echo $_smarty_tpl->tpl_vars['user_data']->value->usr;?>
</strong>, 
                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("ultima_sesion"));?>
: <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value->lastLog,"d/m/Y H:i:s");?>
</strong>, 
                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("ultima_ip"));?>
: <strong><?php echo $_smarty_tpl->tpl_vars['user_data']->value->lastIp;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="/login/logout/"> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("cerrar_sesion");?>
</a></strong>
                <?php } else { ?>
                    <a href="/login/"> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("iniciar_sesion");?>
</a></strong>
                <?php }?>
            </td>
        </tr>
    </table>
</div>


<?php }} ?>
