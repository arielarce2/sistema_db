
<form action="{{ url('/propietarios/'. $propietarios->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('propietarios.form',['Modo'=>'editar'])

</form>
