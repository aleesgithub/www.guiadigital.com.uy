<?php /* Smarty version Smarty-3.1.18, created on 2015-04-08 16:51:15
         compiled from "/srv/www/htdocs/application/templates/backend/layout/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153327898555255c832cd2e2-70686972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65b837594bdbe5a96cc5a377007325a72d65360f' => 
    array (
      0 => '/srv/www/htdocs/application/templates/backend/layout/footer.tpl',
      1 => 1428417904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153327898555255c832cd2e2-70686972',
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
  'unifunc' => 'content_55255c832f28b5_94603486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55255c832f28b5_94603486')) {function content_55255c832f28b5_94603486($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/srv/www/htdocs/vendor/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include '/srv/www/htdocs/vendor/smarty/libs/plugins/modifier.date_format.php';
?><div class="footer">

    <table class="table">
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
