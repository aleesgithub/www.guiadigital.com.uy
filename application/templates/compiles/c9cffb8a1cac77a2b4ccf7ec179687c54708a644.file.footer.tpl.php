<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 20:09:24
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\layout\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1655753d817a43397d4-77293955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9cffb8a1cac77a2b4ccf7ec179687c54708a644' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\layout\\footer.tpl',
      1 => 1407971362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1655753d817a43397d4-77293955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d817a43397d1_13401794',
  'variables' => 
  array (
    'Tr' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d817a43397d1_13401794')) {function content_53d817a43397d1_13401794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="frontend_footer">

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
: <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value->lastLog,"m/d/Y H:i:s");?>
</strong>, 
                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_("ultima_ip"));?>
: <strong><?php echo $_smarty_tpl->tpl_vars['user_data']->value->lastIp;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                    <a href="/login/logout/"><strong> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("cerrar_sesion");?>
</strong></a>
                <?php } else { ?>
                    <a href="/login/"><strong> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("iniciar_sesion");?>
</strong></a>
                <?php }?>
            </td>
        </tr>
    </table>
</div>


<?php }} ?>
