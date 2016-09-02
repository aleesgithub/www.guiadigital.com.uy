<div class="container-fluid well" id="container-tabla">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
            {include file = 'backend/layout/search.tpl'}
            <a href="/empresa/" id="a-borrar-busqueda"> Borrar busqueda </a>
            <label>Estado</label><select class="text" id='estado' id="estado" name='estado' onchange="location.href='?estado='+this.value">{html_options options=$estados selected=$estado}</select>
        </div>
        
        <!-- xs -->
        <div class="col-xs-8 visible-xs">
            <h4 class="titulo">Listado de Empresas</h4>
        </div>    
        
        <!-- sm -->
        <div class="col-sm-4 visible-sm">
            <h3 class="titulo">Listado de Empresas</h3>
        </div>
        
        <!-- md -->
        <div class="col-md-5 visible-md">
            <h2 class="titulo">Listado de Empresas</h2>
        </div>
        
        <div class="hidden-xs hidden-sm hidden-md col-lg-5 col-lg-pull-1 text-center">
            <h2 class="titulo">Listado de Empresas</h2>
        </div>
        <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-right">
            <button type="button" class="btn btn-lg btn-info" onclick="location.href='/empresa/crear/'" title="Nueva empresa" id="boton-crud"><span class="glyphicon glyphicon-plus"></span> Nueva empresa</button>
        </div>
    </div>
    
    <div class="row">
        <div class=" col-lg-12 table-responsive">
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Localidad</th>
                        <th>Departamento</th>
                        <th>Teléfono</th>
                        <th>Celular</th>
                        <th></th>
                        <th></th>
                        <th>Descripción</th>
                        <th>#Contacto</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    {foreach $rows as $row}
                        <tr>
                            <td>{$row.id}</td>
                            <td><a href="/img/uploads/{$row.imagen}" target="_blank"><img class="img-rounded" src="/img/uploads/mini/{$row.imagen}" title="{$row.nombre}" alt="/img/uploads/noimagen.png" width="65" height="65" /></a></td>
                            <td>{$row.nombre}</td>
                            <td>{$row.direccion}</td>
                            <td>{$row.localidad}</td>
                            <td>{$row.departamento}</td>
                            <td>{$row.telefono}</td>
                            <td>{$row.celular}</td>
                            <td><!-- Email -->
                                {if $row.email}
                                    <a href="mailto:{$row.email}"><i class="fa fa-envelope-o fa-2x"></i></span></a>
                                {/if}
                            </td>
                            <td><!-- Web -->
                                {if $row.web}
                                    <a href="{$row.web}" target="blank"><i class="fa fa-home fa-2x"></i></span></a>
                               {/if}
                            </td>
                            <td>{$row.descripcion|truncate:30:"...":true}</td>
                            <td>{$row.contactoId}</td>
                            <td>{$row.usuario}</td>
                            <td>{$row.estado}</td>
                            <td>{$row.created|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                            <td>{$row.updated|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                            <td class="pull-right"> 
                                <button type="button" class="btn btn-lg btn-primary" onclick="location.href='/empresa/actualizar/id/{$row.id}/'" title="Editar ({$row.nombre}" id="boton-crud"><span class="glyphicon glyphicon-pencil"></span> Editar </button>
                                <button type="button" class="btn btn-lg btn-warning" onclick="return (confirmar('/empresa/eliminar/id/{$row.id}/', 'Seguro desea eliminar la empresa ({$row.nombre})?'))" title="Eliminar ({$row.nombre})" id="boton-crud"> <span class="glyphicon glyphicon-remove"></span> Eliminar </button>
                               
                            </td>
                        </tr>
                    {/foreach}
                </tbody>

            </table>
        </div>
    </div>
    <div>{include file = 'backend/layout/pagination.tpl'}</div>
</div>






<!-- <td>
        {if $row.facebook}
            <a href="mailto:{$row.facebook}"><i class="fa fa-facebook fa-2x"></i></span></a>
        {/if}
    </td>
    <td>

        {if $row.twitter}
            <a href="{$row.twitter}" target="blank"><i class="fa fa-twitter fa-2x"></i></span></a>
        {/if}
    </td>
    <td>

        {if $row.youtube}
            <a href="mailto:{$row.youtube}"><i class="fa fa-youtube fa-2x"></i></span></a>
        {/if}
    </td>
    <td>

        {if $row.linkedin}
            <a href="{$row.linkedin}" target="blank"><i class="fa fa-linkedin fa-2x"></i></span></a>
        {/if}
    </td>
    <td>

        {if $row.rss}
            <a href="mailto:{$row.rss}"><i class="fa fa-rss fa-2x"></i></span></a>
        {/if}
    </td>
    <td>

        {if $row.googlemaps}
            <a href="{$row.googlemaps}" target="blank"><i class="fa fa-map fa-2x"></i></span></a>
        {/if}
    </td>

-->