<?php /* Smarty version Smarty-3.1.18, created on 2016-08-12 22:49:40
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\login\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281855d61aa97ea4e9-95107601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5464f9d38f002c9307d410f608b8f63c20e7677a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\login\\login\\index.tpl',
      1 => 1471034978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281855d61aa97ea4e9-95107601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61aa97f3775_90058480',
  'variables' => 
  array (
    'usr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61aa97f3775_90058480')) {function content_55d61aa97f3775_90058480($_smarty_tpl) {?><!-- Pantalla de login -->

<div class="container" id="container-login">
    <div class="row">
        <div class="col-xs-12">
            <!-- Imagen avatar -->
            <img src="/img/sistema/avatar.png" class="img-circle" id="avatar">
            <form class="form-horizontal" action="/login/" method="post">
                <!-- do_submit para decir que se presionó el botón login -->
                <input type="hidden" name="do_submit" value="134" />
                <!-- Cuadro de texto para usuario -->
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="usr" required autofocus id="usr" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
">
                    </div>
                </div>
                <!-- Cuadro de texto para contraseña -->
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        <input type="password" class="form-control" placeholder="Contraseña" name="pwd" required>
                    </div>
                </div>    
                <!-- Botón login -->
                <input class="btn btn-lg btn-primary btn-block" type="submit" name="button" id="boton-login" value="Iniciar sesión" />
            </form>
          </div>  
    </div>
</div><?php }} ?>
