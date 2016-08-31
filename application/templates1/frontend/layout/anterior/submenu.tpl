
    {if $user_data->role=='ADM'}
        <ul>
            <li><a href="/nota/?proyectoId={$proyecto.id}&nombre=validaci&oacute;n">Validaci&oacute;n</a></li>
            <li><a href="/nota/?proyectoId={$proyecto.id}&nombre=verificaci&oacute;n"">Verificaci&oacute;n</a></li>
            <li><a href="/nota/?proyectoId={$proyecto.id}&nombre=revisi&oacute;n"">Registro de Revisi&oacute;n</a></li>
        </ul>
    {/if}


