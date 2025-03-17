<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre">
<br>
<label for="Apellido"> Apellido </label>
<input type="text" name="Apellido" value="{{ $empleado->Apellido }}" id="Apellido">
<br>
<label for="Email"> Email </label>
<input type="text" name="Email" value="{{ $empleado->Email }}" id="Email">
<br>
<label for="Foto"> Foto </label>
{{ $empleado->Foto }}
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value='Guardar datos'>
<br>