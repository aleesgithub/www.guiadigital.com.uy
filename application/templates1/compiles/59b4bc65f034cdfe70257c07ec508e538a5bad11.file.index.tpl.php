<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 23:25:26
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:406457aa4a46d55d59-57488946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b4bc65f034cdfe70257c07ec508e538a5bad11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\index\\index.tpl',
      1 => 1456154432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406457aa4a46d55d59-57488946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa4a46d5dbc6_98417300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa4a46d5dbc6_98417300')) {function content_57aa4a46d5dbc6_98417300($_smarty_tpl) {?><div class="container-fluid">
    <div class="row">
        
        <!-- Carousel -->
        <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div class="visible-xs">
            &nbsp;
        </div>
        
        <!-- Publicidad lateral-->
        <?php echo $_smarty_tpl->getSubTemplate ('frontend/layout/publicidad_lateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </div>
        
    <div class="visible-sm visible-md visible-lg">
        &nbsp;
    </div>
</div><?php }} ?>
