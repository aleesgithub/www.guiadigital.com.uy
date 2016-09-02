<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:20:51
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2810457c5ce83cb0581-29609118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c1ec4fd180a35ab6b4d079a46fd9e642c4e86f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\footer.tpl',
      1 => 1441132861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2810457c5ce83cb0581-29609118',
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
  'unifunc' => 'content_57c5ce83cbf893_75377468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce83cbf893_75377468')) {function content_57c5ce83cbf893_75377468($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
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
