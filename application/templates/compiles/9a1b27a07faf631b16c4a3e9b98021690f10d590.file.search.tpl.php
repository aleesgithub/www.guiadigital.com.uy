<?php /* Smarty version Smarty-3.1.18, created on 2015-08-12 20:23:18
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3250853f37967bd1bb0-04748216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a1b27a07faf631b16c4a3e9b98021690f10d590' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\layout\\search.tpl',
      1 => 1439403791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3250853f37967bd1bb0-04748216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f37967bdae13_09265830',
  'variables' => 
  array (
    'nomparam' => 0,
    'valparam' => 0,
    'search' => 0,
    'Tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f37967bdae13_09265830')) {function content_53f37967bdae13_09265830($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\www.sysav.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><form action="" method="get" class="form-inline">
    <table width='100%'>
        <tr>
            <td>
                <label for="textfield"></label>
            </td>
             <td width='80%'>
                 <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['nomparam']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['nomparam']->value;?>
" value = "<?php echo $_smarty_tpl->tpl_vars['valparam']->value;?>
" class="text" /><input type="text" name="search" id="search" value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" class="text" />
            </td>
           
             <td>
                <input type="submit" name="button" id="button" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Tr']->value->_('buscar'));?>
" class="btn btn-default" />
            </td>
             
        </tr>
    </table>
  
 
 
  
</form><?php }} ?>
