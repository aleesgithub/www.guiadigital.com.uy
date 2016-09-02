
    {if $user_data->role}
        <img src="/uploads/mini/{$user_data->imagen}" title="{$user_data->nombre} {$user_data->apellido}" alt="{$user_data->nombre} {$user_data->apellido}" /><span>{$user_data->nombre}</span>
        <ul>
            <li><a href="/empresa/crear/">Agregar Empresa</a></li>
            <li><a href="/nota/?proyectoId={$proyecto.id}&nombre=verificaci&oacute;n"">Administrar</a></li>
            <li><a href="/login/logout/">Cerrar Sesi&oacute;n</a></li>
        </ul>
    {/if}


