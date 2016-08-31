
<!--Segundo contenedor menu secundario-->

<div class="container-fluid">
    <div class="row" id="menu-sec">
        <!--Menu secundario es visible en sm lg-->
        <div class="col-sm-12 col-sm-offset-1 visible-sm visible-md  col-md-8 col-md-offset-2 visible-lg col-lg-9 col-lg-offset-3">
            {if $user_data->usr}
                <img src="/img/usuarios/{$user_data->imagen}">
                <small> {$user_data->nombre} {$user_data->apellido} </small>
                <a href="/login/logout/" class="link-logout"> Cerrar sesi&oacute;n </a>
            {else}
                <a href="/login/" class="link-login"> Iniciar sesi&oacute;n </a>
            {/if}
            
            
            
            
            
            <a href="#" class="enlace-menu2">Funciones</a>
            <a href="#" class="enlace-menu2">Para dispositivos móviles</a> 
            <a href="#" class="enlace-menu2">Para empresas</a>
            <a href="#" class="enlace-menu2">Ayuda</a>
            <br><p></p>        
        </div>  
            
         <!--Menu compacto es visible en xs-->   
        <div class="col-xs-12 visible-xs">
            
            
            
            <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                    
                    
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" class="enlace-menu">Rubros</a>
                        </li>
                        <li>
                            <a href="#" class="enlace-menu">Para dispositivos móviles</a>
                        </li>
                        <li>
                            <a href="#" class="enlace-menu">Contacto</a>
                        </li>
                        <li>
                            <a href="#" class="enlace-menu">Ayuda</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>
<!--Fin del segundo contenedor-->