
{if $msg[0] && $msg[1]}
    {if $msg[0] == 'error'}
            {assign var="alert_css" value="alert alert-danger"}
    {/if}
    {if $msg[0] == 'success'}
            {assign var="alert_css" value="alert alert-success"}
    {/if}
    {if $msg[0] == 'warning'}
            {assign var="alert_css" value="alert alert-warning"}
    {/if}	
    {if $msg[0] == 'info'}
            {assign var="alert_css" value="alert alert-info"}
    {/if}	
    <div class="{$alert_css}">{$msg[1]}</div>		
{/if}