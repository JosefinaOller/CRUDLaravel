Formulario de creación de empleado

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf <!-- para controlar que los datos vengan del mismo sistema en la solicitud de POST-->
    <label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre" id="Nombre">
    <br>

    <label for="Apellido"> Apellido </label>
    <input type="text" name="Apellido" id="Apellido">
    <br>

    <label for="Email"> Email </label>
    <input type="text" name="Email" id="Email">
    <br>
    

    <label for="Foto"> Foto </label>
    <input type="file" name="Foto" id="Foto">
    <br>

    <input type="submit" value='Guardar datos'>
    <br>
</form>