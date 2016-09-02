<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 20:21:18
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1036357c5ce9eafc240-07481454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b4bc65f034cdfe70257c07ec508e538a5bad11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\index\\index.tpl',
      1 => 1470773101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1036357c5ce9eafc240-07481454',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57c5ce9eb198d9_41608268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5ce9eb198d9_41608268')) {function content_57c5ce9eb198d9_41608268($_smarty_tpl) {?><div class="inicio">
    
    
</div>
<div class="searchindex">
                <br><br>
                
                <form class="formsearch" action='/empresa/listar/' method='get'>
                    <img src="/img/logo.png" width="40px" style="float: left">
                    <input type="text" placeholder="ingresar empresa, rubro o lo que desee buscar ..." required name='search' >
                    <button type="submit">buscar</button>
                </form>

</div>
<div  id="map_canvas11" style="width: 100%; height: 40%;">

</div>
	<?php }} ?>
