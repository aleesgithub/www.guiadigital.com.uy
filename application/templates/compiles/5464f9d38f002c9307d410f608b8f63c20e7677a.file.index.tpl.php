<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:21:19
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\login\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:687057c5ce9f027892-66508598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5464f9d38f002c9307d410f608b8f63c20e7677a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\login\\login\\index.tpl',
      1 => 1470155032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '687057c5ce9f027892-66508598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usr' => 0,
    'pwd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5ce9f02c8d4_09945285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce9f02c8d4_09945285')) {function content_57c5ce9f02c8d4_09945285($_smarty_tpl) {?><form action="/login/" method="post">
<input type="hidden" name="do_submit" value="134" />

<center>  
<table>
  <tr>
      <td><label class="lbl1"><strong>Usuario:</strong></label></td>
      <td><input name="usr" type="text" id="usr" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
" /></td>
  </tr>
  
  <tr>
      <td><label class="lbl1"><strong>Clave:kkkkkkk</strong></label></td>
      <td><input name="pwd" type="password" id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
" /></td>
  </tr>
  
  <tr>
      <td colspan="2" align="center"><input class="login_buton" type="submit" name="button" id="button" value="Login" /></td>
  </tr>
</table>
</center>
</form><?php }} ?>
