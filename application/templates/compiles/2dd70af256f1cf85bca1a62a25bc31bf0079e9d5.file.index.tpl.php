<?php /* Smarty version Smarty-3.1.18, created on 2015-09-07 01:29:16
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2973055d61aa8eb1e64-11236085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dd70af256f1cf85bca1a62a25bc31bf0079e9d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\index\\index.tpl',
      1 => 1441581943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2973055d61aa8eb1e64-11236085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61aa8eb3918_70566693',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61aa8eb3918_70566693')) {function content_55d61aa8eb3918_70566693($_smarty_tpl) {?><div class="inicio">
    
    
</div>
           
<div class="searchindex">
                <br><br>
                
                <form class="formsearch" action='/empresa/listar/' method='get'>
                    <img src="/img/logo.png" width="40px" style="float: left"><input type="text" placeholder="ingresar empresa, rubro o lo que desee buscar ..." required name='search' >
  <button type="submit">buscar</button>
</form>

</div>

	<?php }} ?>
