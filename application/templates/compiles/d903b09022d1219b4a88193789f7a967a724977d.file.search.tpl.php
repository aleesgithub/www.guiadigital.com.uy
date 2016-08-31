<?php /* Smarty version Smarty-3.1.18, created on 2015-09-01 21:56:03
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1366555e5fe7912ea10-00012730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd903b09022d1219b4a88193789f7a967a724977d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\search.tpl',
      1 => 1441137328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366555e5fe7912ea10-00012730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e5fe79149800_88532636',
  'variables' => 
  array (
    'nomparam' => 0,
    'valparam' => 0,
    'search' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e5fe79149800_88532636')) {function content_55e5fe79149800_88532636($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>
            
<div class="searchindex">

                <br><br>
                
                <form class="formsearch" action='' method='get'>
                    <img src="/img/logo.png" width="40px" style="float: left">
                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['nomparam']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['nomparam']->value;?>
" value = "<?php echo $_smarty_tpl->tpl_vars['valparam']->value;?>
" class="text" />
                    <input type="text" placeholder="ingresar empresa, rubro o lo que desee buscar ..." required name='search' value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
                    <button type="submit" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_('buscar'));?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_('buscar'));?>
</buscar>
</form>

</div><?php }} ?>
