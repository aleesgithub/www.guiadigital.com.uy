<!-- Cabezal -->
{include file = 'frontend/layout/head.tpl'}

<body>

    <div class="container-fluid well" id="container-body">
        <div class="row">
    
            <!-- Menú -->
            {include file = 'frontend/layout/menu.tpl'}

            <!-- Contenido -->
            {include file = "backend/$content"}

            <!-- Footer -->
            {include file = 'frontend/layout/footer.tpl'}

            <!-- Librerías -->
            {include file = 'frontend/layout/librerias.tpl'}
            
        </div>
    </div>
</body>