<div class="container-fluid well"> 
    <!-- container es para usar el 80% -->
    <!-- fluid es para usar el 100% -->
    <!-- Well es para poner fondo gris -->
    <div class="row">
        <!-- row es una fila -->
        
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 hidden-xs visible-lg">
            <!-- col es una columna -->
            <!-- los tamaños de las columnas son xs, sm, md, lg -->
            <!-- visible es para mostrar -->
            <!-- hidden es para ocultar -->

        </div>
        
        <div class="clearfix visible-xs">
            <!-- clearfix hace que los divs se adapten al de mayor tamaño. -->
        </div>
        <div class="col-md-offset-1">
            <!-- offset crea columnas a la izquierda -->
        </div>
        
        <div class="col-md-push-1">
            <!-- push empuja a la derecha tantos espacios. Queda por debajo de la siguiente. -->
        </div>
        
        <div class="col-md-pull-1">
            <!-- pull jala a la izquierda tantos espacios. Queda por debajo de la siguiente. -->
        </div>
        <a class="pull-left" href="#">
            <!-- pull left centra a la izquierda. -->
            <img class="media-object" src="img/foto1.jpg" class="img-responsive" alt="texto1">
            <img class="media-object" src="img/foto1.jpg" class="img-circle" alt="texto1"><!-- foto redonda. -->
        </a>
        
        <a class="pull-right">
            <!-- pull right centra a la derecha. -->
        </a>
        
        
        <!-- ID con #   Sombra en CSS3 
        #sombra{
            -webkit-box-shadow:  0px 0px 18px 0px rgba(48, 50, 50, 0.48);
            -moz-box-shadow:  0px 0px 18px 0px rgba(48, 50, 50, 0.48);
            box-shadow:  0px 0px 18px 0px rgba(48, 50, 50, 0.48);
        }
        -->
        
    </div>
</div>



