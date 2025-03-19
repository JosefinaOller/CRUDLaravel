@extends('layouts.app')
@section('content')
<div class="container">
<h3>{{ $modo }} empleado</h3>

<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado) ? $empleado->Nombre : '' }}" id="Nombre">
</div>

<div class="form-group">
<label for="Apellido"> Apellido </label>
<input type="text" class="form-control" name="Apellido" value="{{ isset($empleado) ? $empleado->Apellido : '' }}" id="Apellido">
</div>

<div class="form-group">
<label for="Email"> Email </label>
<input type="text" class="form-control" name="Email" value="{{ isset($empleado) ? $empleado->Email : '' }}" id="Email">
</div>

<div class="form-group">
<label for="Foto"></label>
@if(isset($empleado->Foto)) <!--Controlo que haya empleado y foto-->
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>
<br>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">
<a class="btn btn-primary" href="{{ url('empleado/') }}"> Volver </a>
</div>
@endsection