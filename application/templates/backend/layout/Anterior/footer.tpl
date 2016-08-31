<div class="footer">

    <table>
        <tr>
            
            <td align="right">
                {if $user_data->usr}
                    {$Tr->_("usuario")|capitalize}: <strong>{$user_data->usr}</strong>, 
                    {$Tr->_("ultima_sesion")|capitalize}: <strong>{$user_data->lastLog|date_format:"d/m/Y H:i:s"}</strong>, 
                    {$Tr->_("ultima_ip")|capitalize}: <strong>{$user_data->lastIp}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/login/logout/" style="color: #fff"> {$Tr->_("cerrar_sesion")}</a></strong>
                {else}
                    <a href="/login/"> {$Tr->_("iniciar_sesion")}</a></strong>
                {/if}
            </td>
        </tr>
    </table>
</div>


