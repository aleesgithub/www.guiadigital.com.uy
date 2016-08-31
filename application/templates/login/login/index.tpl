<!-- Pantalla de login -->

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
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="usr" required autofocus id="usr" value="{$usr}">
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
</div>