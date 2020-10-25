
<form action="{{ url('/vehiculos/'. $vehiculos->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('vehiculos.form',['Modo'=>'editar'])
