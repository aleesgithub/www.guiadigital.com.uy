<h3>Listado de Usuarios</h3>
<table width="612" border="0" class="table table-hover">
  <tr>
    <th width="170">Nombre</th>
    <th width="180">Apellido</th>
    <th width="248">Email</th>
  </tr>
  {foreach $rows as $row}
  <tr>
    <td>{$row.nombre}</td>
    <td>{$row.apellido}</td>
    <td><a href="mailto:{$row.email}">{$row.email}</a></td>
  </tr>
  {/foreach}
</table>
