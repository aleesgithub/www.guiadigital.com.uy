<?php /* Smarty version Smarty-3.1.18, created on 2015-06-17 15:01:19
         compiled from "C:\xampp\htdocs\www.sysav.com.uy\application\templates\backend\layout\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1153f37967c36488-49115751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '739e09b1a4a4c0cb3b591d0d61325d8b8ee10d84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.sysav.com.uy\\application\\templates\\backend\\layout\\pagination.tpl',
      1 => 1434483345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1153f37967c36488-49115751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f37967cb70e6_50944857',
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
<?php if ($_valid && !is_callable('content_53f37967cb70e6_50944857')) {function content_53f37967cb70e6_50944857($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['P']->value&&$_smarty_tpl->tpl_vars['P']->value->getLast()>1) {?>
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