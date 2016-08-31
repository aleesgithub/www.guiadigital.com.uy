<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 19:38:12
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\login\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:604653d49e53c84e42-64582292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49575f25142aeed68ad6f9362a2c3ced09d59dc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\login\\login\\index.tpl',
      1 => 1407969491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '604653d49e53c84e42-64582292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e53c94846_52732005',
  'variables' => 
  array (
    'usr' => 0,
    'pwd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e53c94846_52732005')) {function content_53d49e53c94846_52732005($_smarty_tpl) {?><form action="/login/" method="post">
<input type="hidden" name="do_submit" value="134" />
<center>
<table>
  <!--Imagen de login.
  <tr>
    <td  colspan="2" align="center"><img src="../img/candado1.jpg" width="75" height="90"></td>
  </tr>
   <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  -->
  <tr>
      <td align="right"><strong>Usuario:</strong></td>
    <td><input name="usr" type="text" id="usr" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><strong>Password:</strong></td>
    <td><input name="pwd" type="password" id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Login" /></td>
  </tr>
</table>
</center>
</form><?php }} ?>
