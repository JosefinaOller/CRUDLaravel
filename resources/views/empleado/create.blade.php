Formulario de creación de empleado

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf <!-- para controlar que los datos vengan del mismo sistema en la solicitud de POST-->
@include('empleado.form',['modo'=>'Crear'])
</form>