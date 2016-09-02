<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:20:52
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2334057c5ce84037bd9-78477780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'babaa950c6edae37afb91a2db5075f83fa87affa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\footer.tpl',
      1 => 1439483925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2334057c5ce84037bd9-78477780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5ce84047fd3_71755125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce84047fd3_71755125')) {function content_57c5ce84047fd3_71755125($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="footer">

    <table>
        <tr>
            
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
                        <a href="/login/logout/" style="color: #fff"> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("cerrar_sesion");?>
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
