<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 00:49:51
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\user\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:934955f700a08f55d1-26133691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0748b9a43b5ae21833371423627ed013b2393186' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\user\\crear.tpl',
      1 => 1472510516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934955f700a08f55d1-26133691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f700a0931ad9_02182673',
  'variables' => 
  array (
    'model' => 0,
    'roles' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f700a0931ad9_02182673')) {function content_55f700a0931ad9_02182673($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="container-fluid well" id="container-tabla">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <h2 class="text-center">Agregar usuario</h2>
        </div>
        <form class="form-horizontal" action="/user/crear/" method="post" enctype="multipart/form-data">
        <input type="hidden" name="do_submit" value="1" />
        <input type="hidden" name="language" value="es" />
        <input type="hidden" name="estado" value="Pendiente" />
        <!-- Imagen -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group text-center">
                <img src="/img/usuarios/nofoto.png" class="img-rounded" id="imagen-usuario-nuevo">
                <input type="file" class="form-control btn btn-lg btn-link" name="imagen" id="imagen" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['imagen'];?>
">
            </div>
        </div>
        <!-- Usuario -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group ">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control ancho-fijo" placeholder="Usuario" name="usr" required autofocus id="usr" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['usr'];?>
">
                </div>
            </div>
        </div>
        <!-- Password -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    <input type="password" class="form-control ancho-fijo" placeholder="Contraseña" name="pwd" required id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['pwd'];?>
">
                </div>
            </div>
        </div>
        <!-- Selección del rol -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <select class="form-control ancho-fijo" name=role><option>Seleccione el rol</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['roles']->value,'selected'=>$_smarty_tpl->tpl_vars['role']->value),$_smarty_tpl);?>
</select>
            </div>
        </div>
        <!-- Nombres -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon-pencil"></span></span>
                    <input type="text" class="form-control ancho-fijo" placeholder="Nombres" name="nombre" required id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
">
                </div>
            </div>
        </div>
        <!-- Apellidos -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon-pencil"></span></span>
                    <input type="text" class="form-control ancho-fijo" placeholder="Apellidos" name="apellido" required id="apellido" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['apellido'];?>
">
                </div>
            </div>
        </div>
        <!-- Email -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="email" class="form-control ancho-fijo" placeholder="Email" name="email" required id="email" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['email'];?>
">
                </div>
            </div>
        </div>
        <!-- Botones -->
        <div class="col-lg-4 col-lg-offset-4 text-center">
            <div class=" form-group">
                <div>
                    <button class="btn btn-success btn-lg" type="submit" id="boton-guardar-cancelar" href="#" data-toggle="modal" data-targer="#Ventana"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar </button>
                    <button class="btn btn-danger btn-lg" type="button" id="boton-guardar-cancelar" onclick="location.href='/user/index/'" ><span class="glyphicon glyphicon-remove-circle"></span> Cancelar </button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div><?php }} ?>
