<!-- Pantalla contacto -->

<div class="container" id="container-contacto">
   
    <!-- Formulario de contacto -->
    <div class="row">
        <form class="form-horizontal" action='/empresa/contacto/' method='get'>
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

