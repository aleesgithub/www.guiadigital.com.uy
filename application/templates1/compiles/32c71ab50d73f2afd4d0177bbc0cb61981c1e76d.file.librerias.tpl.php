<?php /* Smarty version Smarty-3.1.18, created on 2016-08-09 22:40:18
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\frontend\layout\librerias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2412157aa35fa15dad2-84193415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c71ab50d73f2afd4d0177bbc0cb61981c1e76d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\frontend\\layout\\librerias.tpl',
      1 => 1470775199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2412157aa35fa15dad2-84193415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57aa35fa164694_18369950',
  'variables' => 
  array (
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa35fa164694_18369950')) {function content_57aa35fa164694_18369950($_smarty_tpl) {?><!--Libreria jquery
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    -->
    <script src="/js/jquery-3.1.0.min.js"></script>
    
	
<!--Libreria flexslider
    <script src="/js/jquery.flexslider.js"></script>
    <script>
            $(window).load(function(){
                    $(".flexslider").flexslider();
            });
    </script>-->
	
<!--Ale-->
    <script src="/js/unicode-letter.js"></script>
    <script src="/js/es.js"></script>
    <script src="http://maps.google.com/maps?file=api&amp;v=3&amp;sensor=false&amp;key=AIzaSyDWD08m2rubm2lSiEdfQb0szx806bLVhX8" type="text/javascript"></script>  
    <script src="/js/functions.js"></script>
    <script src="/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
.js"></script>
    <!--<script src="/js/jquery-ui-1.11.1.custom/jquery-ui.js"></script>-->
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true'></script>
    <script type='text/javascript'  src='http://code.google.com/apis/gears/gears_init.js'></script>   
    
<!--Bootstrap
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    -->
    <script src="/js/bootstrap.min.js"></script>
    
    
<!-- Intervalo de Carousel 
<script>
    $('.carousel').carousel({
        interval:5000,
        pause:"hover"
    });
</script>--><?php }} ?>
