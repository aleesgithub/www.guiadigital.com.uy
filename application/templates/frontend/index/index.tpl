<!-- Pantalla index -->

<div class="container" id="container-index">
    <div class="row">
        <!-- xs -->
        <div class="visible-xs" id="div-texto-index-xs">
            <h3 id="texto-index">Gu&iacute;a de empresas y servicios</h3>
        </div>
        <!-- sm-md-lg -->
        <div class="hidden-xs col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2" id="div-texto-index">
            <h1 id="texto-index">Gu&iacute;a de empresas y servicios</h1>
        </div>
        
    </div>
    <div class="row">
        <div class="hidden-xs col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <h4 id="texto-index">Aquí está lo que buscas<br> 
                Encuentra todo eso y mucho mas<br><br><br>
            </h4>
        </div>
    </div>
    
    <!-- Cuadro de busqueda -->
    <div class="row">
        <form class="form-horizontal" action='/empresa/listar/' method='get'>
            <!-- xs -->
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg" id="div-buscador-xs">
                <input type="text" class="form-control" id="cuadro_texto-buscar" name='search' required autofocus><!--
                --><button type="submit" class="btn btn-danger btn-lg" id="boton-buscar">Buscar</button>
            </div>
            <!-- sm-md-lg -->
            <div class="hidden-xs col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2" id="div-buscador">
                <input type="text" class="form-control" id="cuadro_texto-buscar" name='search' required autofocus><!--
                --><button type="submit" class="btn btn-danger btn-lg" id="boton-buscar">Buscar</button>
            </div>
            
        </form>
    </div>
</div>

