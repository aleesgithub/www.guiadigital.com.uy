<nav class="navbar navbar-default" id="nav-menu">
    <div class="container-fluid">
        
        <!-- Logo, nombre y menú contraído -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-nav">
                    <span class="sr-only">Men&uacute; de navegaci&oacute;n</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a href="/index/index" id="a-link-menu"><img src="/img/sistema/apple-touch-icon-57x57.png" id="imagen-logo"></a>
        </div>
        <div class="navbar-header">
            <Label id="label-titulo">Gu&iacute;a Digital</Label>
        </div>

        <!-- Menú desplegable -->
        <div class="collapse navbar-collapse" id="menu-nav">

            <!-- Lista del menú -->
            <ul class="nav navbar-nav navbar">

                <!-- Inicio -->
                <li>
                    <a  href="/index/index" id="a-link-menu"><i class="fa fa-home fa-1x" id="icono-menu"></i> <os-p >Inicio</os-p> </a>
                </li>
                
                <!-- Servicios -->
                <li>
                    <a  href="/index/servicios" id="a-link-menu"><i class="fa fa-list fa-1x" id="icono-menu"></i> <os-p >Servicios</os-p> </a>
                </li>

                <!-- Menú administrador -->
                {if $user_data->role=='ADM'}
                    <li>
                        <a href="/user/" id="a-link-menu"> <i class="fa fa-user fa-1x" id="icono-menu"></i> <os-p >Usuarios</os-p> </a>
                   </li>
                   <li>
                       <a href="/empresa/" id="a-link-menu"> <i class="fa fa-building fa-1x" id="icono-menu"></i> <os-p >Empresas</os-p> </a>
                   </li>
               {/if}

                <!-- Contacto si el usuario NO es administrador-->
                {if $user_data->role!='ADM'}
                    <li>
                        <a href="/contacto/"  id="a-link-menu"><i class="fa fa-envelope fa-1x" id="icono-menu"></i><os-p > Contacto</os-p></a><div id="notify" class="notify" style="display: none">{$mailrec}</div>
                    </li>
               {/if}
            </ul>   
            
            <!-- Menú de usuario -->    
            <ul class="nav navbar-nav navbar-right">
                
                <!-- Errores -->
                <li id="cuadro-errores">
                    {include file = 'frontend/layout/messages.tpl'}
                </li>
                
                {if $user_data->usr}
                    <li>
                        <a href="/login/logout" id="a-link-logueado"><img id="img_usuario_menu" src="/img/usuarios/{$user_data->imagen}" class="img-rounded"><span> Cerrar sesión </span></a>
                    </li>
                {else}
                    <li>
                        <a href="/login/" id="a-link-login"> Iniciar sesi&oacute;n </a>
                    </li>
                {/if}
            </ul>           
        </div>
    </div>
</nav>