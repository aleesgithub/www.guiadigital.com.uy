    <ul  id="ulautocomplete" class="autocomplete">
        <li  onclick="addRubro('{$subrubro}','0')" >
                <img src="/img/Icon-user.png" width='20' height='20'><a>{$subrubro}&nbsp;&nbsp; <strong>&Lt;Otros&Gt;</strong></a>
            </li>
        
{if $rows}{foreach $rows as $row}
             {if $row.id==0}
                 {assign var="rubro" value="Rubro no Registrado" }
             {else}
                 {assign var="rubro" value=$row.subrubro|capitalize}
             {/if}
             <li  onclick="addRubro('{$row.subrubro}','{$row.id}')" >
                <img src="/img/Icon-user.png" width='20' height='20'><a>{$row.rubro}&nbsp;&nbsp; <strong>&Lt;{$rubro|capitalize}&Gt;</strong></a>
            </li>       
        {/foreach}
        <li onclick="salirautocomplete()">Salir<strong>[x]</strong></li>
    
    {/if}
</ul>