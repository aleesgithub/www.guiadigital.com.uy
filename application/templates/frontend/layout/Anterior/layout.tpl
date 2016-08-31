{if $jquery==false} {include file = 'frontend/layout/header.tpl'}
    <div id="contenido" class="content">
{/if}

    {include file = "frontend/$content"}

{if $jquery==false} </div>
    
    {include file = 'frontend/layout/footer.tpl'}
    {include file = "frontend/layout/titles.tpl"}
    {*include file = "frontend/layout/tool.tpl"*}
<div class="backend_cuerpo"></div>
<div id="flotante">

</div>
<div id="usermenu" class="usermenu">{include file = "backend/layout/usermenu.tpl"}</div>
<div id="reloj" class="reloj"></div>
<div id="fecha" class="fecha"></div>
<div  class="logo"><span><label id="gui">Gu&iacute;a<label id="di">Digital</span></div>
</span>
</body>
</html>{/if}

