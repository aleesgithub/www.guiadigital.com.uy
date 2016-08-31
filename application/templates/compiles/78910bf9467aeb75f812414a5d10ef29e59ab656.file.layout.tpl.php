<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 16:59:15
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1188953d817a413dad0-32794493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78910bf9467aeb75f812414a5d10ef29e59ab656' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\layout\\layout.tpl',
      1 => 1407959953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188953d817a413dad0-32794493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d817a418bcd0_05623210',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d817a418bcd0_05623210')) {function content_53d817a418bcd0_05623210($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="frontend_content"><?php echo $_smarty_tpl->getSubTemplate ("frontend/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="frontend_paginar"><?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="frontend_divGeneral"></div>
<div id="fondomenu" class="frontend_fondomenu"></div>
<div class="frontend_footer_fondo"></div>
</body>
</html><?php }} ?>
