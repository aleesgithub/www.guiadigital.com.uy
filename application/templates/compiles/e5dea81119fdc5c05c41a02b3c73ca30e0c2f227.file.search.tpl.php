<?php /* Smarty version Smarty-3.1.18, created on 2016-08-27 03:14:57
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:423255d61cf89baae1-19250650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5dea81119fdc5c05c41a02b3c73ca30e0c2f227' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\search.tpl',
      1 => 1472260493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '423255d61cf89baae1-19250650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61cf89c7471_12380262',
  'variables' => 
  array (
    'nomparam' => 0,
    'valparam' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61cf89c7471_12380262')) {function content_55d61cf89c7471_12380262($_smarty_tpl) {?><div>
    
    <form class="formsearch" action='' method='get'>
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['nomparam']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['nomparam']->value;?>
" value = "<?php echo $_smarty_tpl->tpl_vars['valparam']->value;?>
" class="text" />
        <input type="text" placeholder="Texto a buscar ..." required autofocus name='search' value = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" id="cuadro-texto-buscar-crud"><!--
        --><input class="btn btn-lg btn-primary" type="submit" value="Buscar" title="Buscar" id="boton-crud-buscar">
    </form>
</div><?php }} ?>
