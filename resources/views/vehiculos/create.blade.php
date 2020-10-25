
<form action="{{url('/vehiculos')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('vehiculos.form',['Modo'=>'crear'])

</form>