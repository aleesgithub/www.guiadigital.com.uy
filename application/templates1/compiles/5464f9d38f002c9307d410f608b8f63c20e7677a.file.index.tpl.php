<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 22:00:33
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\login\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1947957aa36619d5bc2-48450496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5464f9d38f002c9307d410f608b8f63c20e7677a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\login\\login\\index.tpl',
      1 => 1470765594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947957aa36619d5bc2-48450496',
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
  'unifunc' => 'content_57aa36619e9447_28768040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa36619e9447_28768040')) {function content_57aa36619e9447_28768040($_smarty_tpl) {?><form action="/login/" method="post">
<input type="hidden" name="do_submit" value="134" />

<center>  
<table>
  <tr>
      <td><label class="lbl1"><strong>Usuario:</strong></label></td>
      <td><input name="usr" type="text" id="usr" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
" /></td>
  </tr>
  
  <tr>
      <td><label class="lbl1"><strong>Clave:</strong></label></td>
      <td><input name="pwd" type="password" id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
" /></td>
  </tr>
  
  <tr>
      <td colspan="2" align="center"><input class="login_buton" type="submit" name="button" id="button" value="Login" /></td>
  </tr>
</table>
</center>
</form><?php }} ?>
