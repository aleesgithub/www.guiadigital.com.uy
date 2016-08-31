   
<div class="container-fluid">
            <!-- Logo, nombre y menú contraído -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <span class="sr-only"> Men&uacute; de navegaci&oacute;n </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <!-- Menú desplegable -->
            <div class="collapse navbar-collapse navbar" id="menu">
                
                <!-- Menú -->
                <ul class="nav navbar-nav">
                    
                    <!-- Inicio -->
                    <li>
                        <a  href="/index/index"><i class="fa fa-home fa-1x" id="icono-menu"></i> <os-p >Inicio</os-p> </a>
                    </li>
                    
                    <!-- Rubros -->
                    <li>
                            <a id="link-menu" href="/rubros/" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-list fa-1x" id="icono-menu"></i> <os-p >Rubros</os-p><span class="caret"> </a>
                            
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="/empresas/?search=automotores"> Automotores </a></li>
                            <li><a href="/empresas/?search=educacion"> Educaci&oacute;n </a></li>
                            <li><a href="/empresas/?search=salud"> Salud </a></li>
                            <li><a href="#"> Sub-Rubro 4 </a></li>
                            <li class="divider"></li>
                            <li><a href="#"> Ver todos... </a></li>
                        </ul>
                    </li>
                    
                    <!-- Menú administrador -->
                    {if $user_data->role=='ADM'}
                        <li>
                            <a id="link-menu" href="/user/"> <i class="fa fa-user fa-1x" id="icono-menu"></i> <os-p >Usuarios</os-p> </a>
                       </li>
                       <li>
                           <a id="link-menu" href="/empresa/"> <i class="fa fa-building fa-1x" id="icono-menu"></i> <os-p >Empresas</os-p> </a>
                       </li>
                   {/if}
                    
                    <!-- Contacto si el usuario NO es administrador-->
                    {if $user_data->role!='ADM'}
                        <li>
                            <a href="/contacto/" ><i class="fa fa-envelope fa-1x" id="icono-menu"></i><os-p > Contacto</os-p></a><div id="notify" class="notify" style="display: none">{$mailrec}</div>
                        </li>
                   {/if}
                    
                    
                    
                </ul>
                    
                    
                <!-- Menú de usuario -->    
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        {if $user_data->usr}
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="a_usuario_menu">
                                <img id="img_usuario_menu" src="/img/usuarios/{$user_data->imagen}" class="img-circle">
                                <label id="label_usuario_menu"> {$user_data->nombre} {$user_data->apellido} </label>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li ><a href="#"><i class="fa fa-pencil-square-o fa-1x" id="icono-menu"></i><os-p > Editar usuario </os-p> </a></li>
                                <li class="divider"></li>
                                <li ><a href="/login/logout/"> <i class="fa fa-sign-out fa-1x" id="icono-menu"></i><os-p > Cerrar sesi&oacute;n </os-p> </a></li>
                            </ul>
                        {else}
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="a_usuario_menu">
                                <img id="img_usuario_menu" src="/img/usuarios/nofoto.png">
                                <label id="label_usuario_menu"> &nbsp; </label>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li ><a href="/login/"> Iniciar sesi&oacute;n </a></li>
                            </ul>
                        {/if}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <div class="container">
        
        <!-- Poner el menú a la derecha -->
        
        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>
        
        <header class="row">
            <div class="col-lg-3 col-logo-inicio">
                <a href="/index/index"> <img src="/img/logo01.png" id="img_logo_inicio"> Gu&iacute;a Digital</a>
            </div>
        </header>
    </div>


