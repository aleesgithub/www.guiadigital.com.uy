<div class="container-fluid well" id="container-tabla">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
        
            <div class="row">
                <!-- Título -->
                <div class="text-center">
                    <h2 class="titulo">Editar la empresa ({$model.nombre})</h2>
                </div>
            </div>
            
            <!-- Formulario -->
            <form class="form-horizontal" action="/empresa/actualizar/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="do_submit" value="1" />
            <input  name="usuario" type="hidden" id="usuario" value="{$user_data->usr}" />
            <input type="hidden" name="pais" value="Uruguay" />
            
            <div class="row">
                <!-- Logo de la empresa -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                    <img src="/img/uploads/noimagen.png" class="img-rounded" id="imagen-logo">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-left">
                    <label id="label-logo">Logo de la empresa</label>
                    <input type="file" class="form-control btn btn-lg btn-link input-examinar-empresa" name="imagen" id="imagen" value="{$model.imagen}">
                </div>
            </div>
            
            <div class="row">
                <!-- Nombre -->
                <div class="col-xs-12 col-sm-9 col-md-8 col-lg-7">
                    <div class=" form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control ancho-fijo" name="nombre" required autofocus id="nombre" value="{$model.nombre}">
                    </div>
                </div>
                    
                <!-- Estado -->
                <div class="col-xs-6 col-sm-2 col-sm-offset-1 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-2">
                    <div class=" form-group">
                        <label for="estado">Estado</label>
                        {if $user_data->role=='ADM'}
                            <select class="form-control ancho-fijo" name=departamento secected={$model.departamento}>
                            <option value="vigente">Vigente</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="suspendida">Suspendida</option>
                        </select>
                        {else}
                            <input type="text" class="form-control ancho-fijo" name="estado" required id="estado" value="{$model.estado} disabled">
                        {/if}
                        
                        
                        
                    </div>
                </div>
            </div>
                    
            <div class="row">
                <!-- Dirección -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class=" form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control ancho-fijo" name="direccion" required id="direccion" value="{$model.direccion}">
                    </div>
                </div> 
            
                <!-- Localidad -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class=" form-group">
                        <label for="localidad">Localidad</label>
                        <input type="text" class="form-control ancho-fijo" name="localidad" required id="localidad" value="{$model.localidad}">
                    </div>
                </div> 

                <!-- Departamento -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class=" form-group">
                        <label for="departamento">Departamento</label>
                        <select class="form-control ancho-fijo" name=departamento secected={$model.departamento}>
                            <option>------</option>
                            <option value="Montevideo">Montevideo</option>
                            <option value="Canelones">Canelones</option>
                            <option value="Mercedes">Mercedes</option>
                            <option value="Rocha">Rocha</option>
                        </select> 
                    </div>
                </div> 
            </div>
            
            <div class="row">
                <!-- Teléfono -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class=" form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control ancho-fijo" name="telefono" required id="telefono" value="{$model.telefono}">
                    </div>
                </div> 
            
                <!-- Fax -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class=" form-group">
                        <label for="fax">Fax</label>
                        <input type="text" class="form-control ancho-fijo" name="fax" required id="fax" value="{$model.fax}">
                    </div>
                </div> 

                <!-- Celular -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class=" form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control ancho-fijo" name="celular" required id="celular" value="{$model.celular}">
                    </div>
                </div> 
            </div>

            <div class="row">
                <!-- Email -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class=" form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control ancho-fijo" name="email" required id="email" value="{$model.email}">
                    </div>
                </div> 
            
                <!-- Web -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class=" form-group">
                        <label for="web">Web</label>
                        <input type="text" class="form-control ancho-fijo" name="web" required id="web" value="{$model.web}">
                    </div>
                </div> 
            </div>      
             
            <div class="row">
                <!-- Rubros -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class=" form-group">
                        <label for="rubros">Rubros</label>
                        <input type="text" class="form-control ancho-fijo" name="rubros" required id="rubros" value="{$model.rubros}">
                        <input type="text" class="form-control ancho-fijo" name="rubros" required id="rubros" value="{$model.rubros}">
                        <input type="text" class="form-control ancho-fijo" name="rubros" required id="rubros" value="{$model.rubros}">
                        <input type="text" class="form-control ancho-fijo" name="rubros" required id="rubros" value="{$model.rubros}">
                    </div>
                </div> 

                <!-- Descripción -->
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                    <div class=" form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea type="text" rows="6" class="form-control ancho-fijo" name="descripcion" required id="descripcion" value="{$model.descripcion}"></textarea>
                    </div>
                </div> 
            </div>          
              
            <div class="row">
                <!-- Botones -->
                <div class="col-xs-12 text-center">
                    <div class=" form-group">
                        <div>
                            <button class="btn btn-success btn-lg" type="submit" id="boton-guardar-cancelar" href="#" data-toggle="modal" data-targer="#Ventana"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar </button>
                            <button class="btn btn-danger btn-lg" type="button" id="boton-guardar-cancelar" onclick="location.href='/empresa/index/'" ><span class="glyphicon glyphicon-remove-circle"></span> Cancelar </button>
                        </div>
                    </div>
                </div>
            </div>
            
            </form>
        </div>
    </div>
</div>