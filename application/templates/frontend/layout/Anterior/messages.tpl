{if $msg[0] && $msg[1]}
	{if $msg[0] == 'error'}
		{assign var="alert_css" value="alert-danger"}
	{/if}
	{if $msg[0] == 'success'}
		{assign var="alert_css" value="alert-success"}
	{/if}
	{if $msg[0] == 'warning'}
		{assign var="alert_css" value="alert-warning"}
	{/if}	
	{if $msg[0] == 'info'}
		{assign var="alert_css" value="alert-info"}
	{/if}	
<div class="{$alert_css}"><img src="/img/{$msg[0]}.png" width="25" height="25">&nbsp;&nbsp;{$msg[1]}</div>	
{/if}