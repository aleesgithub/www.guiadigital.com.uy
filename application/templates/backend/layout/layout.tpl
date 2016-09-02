{if $jquery==false} {include file = 'backend/layout/header.tpl'}
    <div id="contenido" class="content">
{/if}

    {include file = "backend/$content"}

{if $jquery==false} </div>
    
    {include file = 'backend/layout/footer.tpl'}
    {include file = "backend/layout/titles.tpl"}
    {*include file = "backend/layout/tool.tpl"*}
<div class="backend_cuerpo"></div>
<div id="flotante">

</div>
<div id="usermenu" class="usermenu">{include file = "backend/layout/usermenu.tpl"}</div>
<div id="reloj" class="reloj"></div>
<div id="fecha" class="fecha"></div>
<div  class="logo"><span><label id="gui">Gu&iacute;as<label id="di">&nbsp;Digital</span></div>

</body>

</html>{/if}

