<?php /* Smarty version Smarty-3.1.18, created on 2014-08-14 16:59:13
         compiled from "C:\xampp\htdocs\www.ticketweb.com.uy\application\templates\frontend\espectaculo\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1420753d926312b9978-53802246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '255f817f1906997437151f0c03cd192601b27b4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.ticketweb.com.uy\\application\\templates\\frontend\\espectaculo\\listado.tpl',
      1 => 1408046352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420753d926312b9978-53802246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d92631398422_71739229',
  'variables' => 
  array (
    'Tr' => 0,
    'categoria' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d92631398422_71739229')) {function content_53d92631398422_71739229($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("listado_espectaculos");?>
 <?php if ($_smarty_tpl->tpl_vars['categoria']->value['nombre']) {?> de (<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
) <?php }?></h3>

<table width="90%" border="0" class="table table-hover">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr>
    <td width="5%" align="center">
        <?php if ($_smarty_tpl->tpl_vars['row']->value['imagen']) {?>
        <a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" /></a>
        <?php } else { ?>
        <img src="/uploads/mini/noimagen.png" width="45" height="45" alt="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("no_imagen");?>
" />
        <?php }?>
    </td>
    <td width="35%" align="left">
        <a href="/evento/listado/?espectaculo=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['Tr']->value->_("ver_espectaculo");?>
 : <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a>
    </td>
    <td width="60%" align="left">
        <?php echo substr($_smarty_tpl->tpl_vars['row']->value['descripcion'],0,200);?>
...</td>
    </tr>
<?php } ?>
</table>

<?php }} ?>
