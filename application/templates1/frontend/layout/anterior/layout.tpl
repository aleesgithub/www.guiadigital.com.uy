{if $jquery==false} {include file = 'frontend/layout/header.tpl'}{/if}

<body>

    
        <section class="contenido-lateral">
            <header class="logo">
                <img class="logo-imagen" src="/img/sistema/logo01.png" alt="Logo" title="Logo de Guía Digital">
                <h1  class="logo-texto">Gu&iacute;a Digital</h1>
            </header>
            
            <nav class="menu-principal">
                 <!-- Login -->
                <aside class="inicio">
                    {if $user_data->usr}
                        <img class="foto-usuario" src="/img/sistema/usuarios/{$user_data->imagen}">
                        <br>
                        <strong>{$user_data->nombre} {$user_data->apellido}</strong>
                        <br>
                        <a href="/login/logout/" class="link-logout"> Cerrar sesi&oacute;n </a>
                    {else}
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="/login/" class="link-login"> Iniciar sesi&oacute;n </a>
                    {/if}
                </aside>  
                {include file = 'frontend/layout/menu.tpl'}
                {*include file = "backend/layout/usermenu.tpl"*}
            </nav>
            
            <aside class="publicidad-lateral">
                {include file = 'frontend/layout/publicidad_lateral.tpl'}
            </aside>
            <aside class="reloj-lateral">
                <div id="reloj" class="reloj"></div>
                <div id="fecha" class="fecha"></div>
            </aside>
            <footer class="pie">
                {include file = 'frontend/layout/footer.tpl'}
            </footer> 
        </section><!--

     --><section class="contenido-central">
            <!--<aside class="titulos">
                <h2>{$titulo}<strong>{$subtitulo}</strong></h2>
            </aside>-->
            <aside class="buscador">
                {include file = 'frontend/layout/buscador.tpl'}
            </aside>
            <section class="principal">
                {include file = "frontend/$content"}
            </section>
        </section>


<!-- Agregar acá los JS -->

</body>
</html>
<!--
<aside class="mensajes">
    {*include file = 'frontend/layout/messages.tpl'*}
</aside>