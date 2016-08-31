    
{if $rows}<ul  id="ulautocomplete" class="autocomplete">
        {foreach $rows as $row}
             {if $row.apellido=='b'}
                 {assign var="user" value="Usuario no Registrado" }
             {else}
                 {assign var="user" value=$row.nombre|capitalize|cat:' '|cat: $row.apellido|capitalize}
             {/if}
             <li  onclick="addTo('{$row.email}','{$row.nombre|capitalize}','{$row.apellido|capitalize}')" >
                <img src="/img/Icon-user.png" width='20' height='20'><a>{$row.email}&nbsp;&nbsp; <strong>&Lt;{$user}&Gt;</strong></a>
            </li>       
        {/foreach}
        <li onclick="salirautocomplete()">Salir<strong>[x]</strong></li>
    </ul>
    {/if}
