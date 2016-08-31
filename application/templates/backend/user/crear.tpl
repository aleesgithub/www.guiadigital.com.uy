<div class="container-fluid well" id="container-tabla">
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
                <input type="file" class="form-control btn btn-lg btn-link" name="imagen" id="imagen" value="{$model.imagen}">
            </div>
        </div>
        <!-- Usuario -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group ">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control ancho-fijo" placeholder="Usuario" name="usr" required autofocus id="usr" value="{$model.usr}">
                </div>
            </div>
        </div>
        <!-- Password -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    <input type="password" class="form-control ancho-fijo" placeholder="Contraseña" name="pwd" required id="pwd" value="{$model.pwd}">
                </div>
            </div>
        </div>
        <!-- Selección del rol -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <select class="form-control ancho-fijo" name=role><option>Seleccione el rol</option>{html_options options=$roles selected=$role}</select>
            </div>
        </div>
        <!-- Nombres -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon-pencil"></span></span>
                    <input type="text" class="form-control ancho-fijo" placeholder="Nombres" name="nombre" required id="nombre" value="{$model.nombre}">
                </div>
            </div>
        </div>
        <!-- Apellidos -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon-pencil"></span></span>
                    <input type="text" class="form-control ancho-fijo" placeholder="Apellidos" name="apellido" required id="apellido" value="{$model.apellido}">
                </div>
            </div>
        </div>
        <!-- Email -->
        <div class="col-lg-4 col-lg-offset-4">
            <div class=" form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="email" class="form-control ancho-fijo" placeholder="Email" name="email" required id="email" value="{$model.email}">
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
</div>