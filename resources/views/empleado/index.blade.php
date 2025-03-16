Mostrar las listas de empleados
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th> <!-- es id-->
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Foto }}</td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->Apellido }}</td>
            <td>{{ $empleado->Email }}</td>
            <td>Editar | Borrar </td>
        </tr>
        @endforeach
    </tbody>
</table>