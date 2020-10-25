

<form action="{{url('/propietario_vehiculo')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('propietario_vehiculo.form',['Modo'=>'crear'])

</form>