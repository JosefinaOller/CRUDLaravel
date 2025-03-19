@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ Session::get('mensaje') }}
    <button type="button" class="close" onclick="this.parentElement.style.display='none';" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

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
{!! $empleados->links() !!}
</div>
@endsection