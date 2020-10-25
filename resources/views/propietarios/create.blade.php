
<form action="{{url('/propietarios')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('propietarios.form',['Modo'=>'crear'])

</form>