@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('empleado/create') }}" class="btn btn-success"> Registrar nuevo empleado </a>
<br>
<br>
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

            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
            </td>

            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->Apellido }}</td>
            <td>{{ $empleado->Email }}</td>
            <td>
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-outline-warning" >
                Editar
            </a>
            
            |

            <form action="{{ url('/empleado/' .$empleado->id ) }}" class="d-inline"  method="post">
            @csrf <!--Llave de seguridad-->
            {{ method_field('DELETE')}} <!--OBservar que arriba dice POST y según el listado de rutas, necesito DELETE para eliminar -->
            <input class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Querés borrar?')" value="Borrar">  
            
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection