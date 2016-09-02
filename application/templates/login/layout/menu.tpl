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
         <!-- Menú de usuario -->    
            <ul class="nav navbar-nav navbar-right">
                
                <!-- Errores -->
                <li id="cuadro-errores">
                    {include file = 'frontend/layout/messages.tpl'}
                </li>
            </ul>
    </div>
</nav>