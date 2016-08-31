<?php /* Smarty version Smarty-3.1.18, created on 2014-08-19 18:08:25
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\backend\layout\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3049953d49e26621be0-76169452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b265ea3aaefd1a88307d54f88e25976a6a5113e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\backend\\layout\\pagination.tpl',
      1 => 1407798974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3049953d49e26621be0-76169452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d49e2674e8a0_11336036',
  'variables' => 
  array (
    'P' => 0,
    'controller' => 0,
    'first' => 0,
    'Tr' => 0,
    'prev' => 0,
    'next' => 0,
    'last' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d49e2674e8a0_11336036')) {function content_53d49e2674e8a0_11336036($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['P']->value&&$_smarty_tpl->tpl_vars['P']->value->getLast()>1) {?>
    <?php $_smarty_tpl->tpl_vars["first"] = new Smarty_variable(true, null, 0);?> 
    <?php $_smarty_tpl->tpl_vars["prev"] = new Smarty_variable(true, null, 0);?> 
    <?php $_smarty_tpl->tpl_vars["last"] = new Smarty_variable(true, null, 0);?> 
    <?php $_smarty_tpl->tpl_vars["next"] = new Smarty_variable(true, null, 0);?> 
    <?php if ($_smarty_tpl->tpl_vars['controller']->value->getPage()==$_smarty_tpl->tpl_vars['P']->value->getFirst()) {?>
        <?php $_smarty_tpl->tpl_vars["first"] = new Smarty_variable(false, null, 0);?> 
        <?php $_smarty_tpl->tpl_vars["prev"] = new Smarty_variable(false, null, 0);?> 
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['controller']->value->getPage()==$_smarty_tpl->tpl_vars['P']->value->getLast()) {?>
        <?php $_smarty_tpl->tpl_vars["last"] = new Smarty_variable(false, null, 0);?> 
        <?php $_smarty_tpl->tpl_vars["next"] = new Smarty_variable(false, null, 0);?>
    <?php }?>
    
    <ul class="pager">	
        <li class="previous <?php if (!$_smarty_tpl->tpl_vars['first']->value) {?>disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['first']->value) {?><?php echo $_smarty_tpl->tpl_vars['controller']->value->getUrl();?>
page/<?php echo $_smarty_tpl->tpl_vars['P']->value->getFirst();?>
/<?php } else { ?>#<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['first']->value) {?> <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('go_page');?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value->getFirst();?>
 <?php }?>">&larr; <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("First");?>
</a></li>
        <li class="<?php if (!$_smarty_tpl->tpl_vars['prev']->value) {?>disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['prev']->value) {?><?php echo $_smarty_tpl->tpl_vars['controller']->value->getUrl();?>
page/<?php echo $_smarty_tpl->tpl_vars['P']->value->getPrevious();?>
/<?php } else { ?>#<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['prev']->value) {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('go_page');?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value->getPrevious();?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Previous");?>
</a></li>
        <li class="<?php if (!$_smarty_tpl->tpl_vars['next']->value) {?>disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['next']->value) {?><?php echo $_smarty_tpl->tpl_vars['controller']->value->getUrl();?>
page/<?php echo $_smarty_tpl->tpl_vars['P']->value->getNext();?>
/<?php } else { ?>#<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['next']->value) {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('go_page');?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value->getNext();?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Next");?>
</a></li>
        <li class="next <?php if (!$_smarty_tpl->tpl_vars['last']->value) {?>disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['last']->value) {?><?php echo $_smarty_tpl->tpl_vars['controller']->value->getUrl();?>
page/<?php echo $_smarty_tpl->tpl_vars['P']->value->getLast();?>
/<?php } else { ?>#<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['last']->value) {?><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_('go_page');?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value->getLast();?>
 <?php }?>"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("Last");?>
 &rarr;</a></li>
    </ul>
    <div class="text-center small"><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("page");?>
 <?php echo $_smarty_tpl->tpl_vars['controller']->value->getPage();?>
 <?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("of");?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value->getLast();?>
</div>
<?php }?>
<?php }} ?>
