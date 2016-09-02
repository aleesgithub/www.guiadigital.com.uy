<div class="container-fluid well" id="container-tabla">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
            {include file = 'backend/layout/search.tpl'}
            <a href="/user/" id="a-borrar-busqueda"> Borrar busqueda </a>
        </div>
        
        <!-- xs -->
        <div class="col-xs-8 visible-xs">
            <h4>Listado de Usuarios</h4>
        </div>    
        
        <!-- sm -->
        <div class="col-sm-4 visible-sm">
            <h3>Listado de Usuarios</h3>
        </div>
        
        <!-- md -->
        <div class="col-md-5 visible-md">
            <h2>Listado de Usuarios</h2>
        </div>
        
        <div class="hidden-xs hidden-sm hidden-md col-lg-5 col-lg-pull-1 text-center">
            <h2>Listado de Usuarios</h2>
        </div>
        <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-right">
            <button type="button" class="btn btn-lg btn-info" onclick="location.href='/user/crear/'" title="Nuevo usuario" id="boton-crud"><span class="glyphicon glyphicon-plus"></span> Nuevo usuario </button>
        </div>
    </div>
    
    <div class="row">
        <div class=" col-lg-12 table-responsive">
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Imagen</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Mail</th>
                        <th>Fecha creado</th>
                        <th>Fecha modificado</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    {foreach $rows as $row}
                        <tr>
                            <td>{$row.id}</td>
                            <td><a href="/uploads/{$row.imagen}" target="_blank"><img class="img-rounded" src="/uploads/mini/{$row.imagen}" title="{$row.nombre} {$row.apellido}" alt="{$row.nombre} {$row.apellido}" /></a></td>
                            <td>{$row.usr}</td>
                            <td><label> ({$row.role})</label>
                                {if $row.role == 'USR'}Usuario{/if}
                                {if $row.role == 'ADM'}Administrador{/if}
                                {if $row.role == 'REP'}Reporte{/if}
                                {if $row.role == 'INV'}Invitado{/if}
                            </td>
                            <td>{$row.nombre}</td>
                            <td>{$row.apellido}</td>
                            <td><a href="mailto:{$row.email}">{$row.email}</a></td>
                            <td>{$row.created|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                            <td>{$row.updated|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                            <td class="pull-right"> 
                                <button type="button" class="btn btn-lg btn-primary" onclick="location.href='/user/actualizar/id/{$row.id}/'" title="Editar ({$row.nombre} {$row.apellido})" id="boton-crud"><span class="glyphicon glyphicon-pencil"></span> Editar </button>
                                <button type="button" class="btn btn-lg btn-warning" onclick="return (confirmar('/user/eliminar/id/{$row.id}/', 'Seguro desea eliminar el usuario ({$row.nombre} {$row.apellido})?'))" title="Eliminar ({$row.nombre} {$row.apellido})" id="boton-crud"> <span class="glyphicon glyphicon-remove"></span> Eliminar </button>
                               
                            </td>
                        </tr>
                    {/foreach}
                </tbody>

            </table>
        </div>
    </div>
    <div>{include file = 'backend/layout/pagination.tpl'}</div>
</div>