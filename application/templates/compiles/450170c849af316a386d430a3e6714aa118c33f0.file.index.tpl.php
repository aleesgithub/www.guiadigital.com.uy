<?php /* Smarty version Smarty-3.1.18, created on 2014-09-19 16:04:31
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\login\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1628153f3797eba23c0-67089288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '450170c849af316a386d430a3e6714aa118c33f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\login\\login\\index.tpl',
      1 => 1411135469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1628153f3797eba23c0-67089288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f3797eba6bf5_58053252',
  'variables' => 
  array (
    'usr' => 0,
    'pwd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f3797eba6bf5_58053252')) {function content_53f3797eba6bf5_58053252($_smarty_tpl) {?><form action="/login/" method="post">
<input type="hidden" name="do_submit" value="134" />
<center><h1>Acceso</h1>
    <hr />
<table>
 
    
  <tr>
  
      <td align="right"><strong>Usuario:</strong></td>
      <td><input name="usr" type="text" id="usr" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><label class="lablogin>"<strong>Clave:</strong></label></td>
    <td><input name="pwd" type="password" id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
      <td colspan="2" align="center"><input class="login_buton" type="submit" name="button" id="button" value="Login" /></td>
  </tr>
</table>
</center>
</form><?php }} ?>
