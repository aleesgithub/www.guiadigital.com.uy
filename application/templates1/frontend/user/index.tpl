<div class="container-fluid">
    <div class="row">
        
        <h3>Listado de Usuarios</h3>
        <table>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <t>Email</th>
          </tr>
          {foreach $rows as $row}
          <tr>
            <td>{$row.nombre}</td>
            <td>{$row.apellido}</td>
            <td><a href="mailto:{$row.email}">{$row.email}</a></td>
          </tr>
          {/foreach}
        </table>

    </div>
        
    <div class="visible-sm visible-md visible-lg">
        &nbsp;
    </div>
</div>