@extends('layouts.app')
@section('content')
<div class="container">
<h3>{{ $modo }} empleado</h3>
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($empleado) ? $empleado->Nombre : '' }}" id="Nombre">
<br>
<label for="Apellido"> Apellido </label>
<input type="text" name="Apellido" value="{{ isset($empleado) ? $empleado->Apellido : '' }}" id="Apellido">
<br>
<label for="Email"> Email </label>
<input type="text" name="Email" value="{{ isset($empleado) ? $empleado->Email : '' }}" id="Email">
<br>
<label for="Foto"> Foto </label>
@if(isset($empleado->Foto)) <!--Controlo que haya empleado y foto-->
    <img src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value="{{ $modo }} datos">
<a href="{{ url('empleado/') }}"> Volver </a>
<br>
</div>
@endsection