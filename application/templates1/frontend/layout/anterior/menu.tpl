<div class="menu">
    <ul id="boton_menu">
        <li>
            <a id="link-menu" href="/index/"> <i class="fa fa-home fa-2x" id="icono-menu"></i> <p class="texto-menu">Inicio</p> </a>
        </li>
        {if $user_data->role=='ADM'}
            <li>
                <a id="link-menu" href="/user/"> <i class="fa fa-user fa-2x" id="icono-menu"></i> <p class="texto-menu">Usuarios</p> </a>
           </li>
           <li>
               <a id="link-menu" href="/empresa/"> <i class="fa fa-building fa-2x" id="icono-menu"></i> <p class="texto-menu">Empresas</p> </a>
           </li>
           <li>
               <a id="link-menu" href="/mail/"> <i class="fa fa-envelope fa-2x" id="icono-menu"></i> <p class="texto-menu">Contacto</p> </a>
               <div id="notify" class="notify" style="display: none">{$mailrec}</div>
               </a>
           </li>
       {/if}
    </ul>
</div>