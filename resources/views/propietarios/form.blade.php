<!doctype html>
    <head>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div class="container">
    <br>



    <h2>{{ $Modo=='crear' ? 'Agregar Propietario':'Modificar Propietario'}}</h2>

<br>
<div class="row">
        <div class="col-md-6">
<label class="control-label" for="Cedula">{{'Cedula'}}</label>
<input class="form-control" type="text" name="Cedula" id="Cedula" value="{{ isset($propietarios->cedula)? $propietarios->cedula : '' }}">
</div>
    </div>
<br>
<div class="row">
        <div class="col-md-6">
<label class="control-label" for="Nombre">{{'Nombre'}}</label>
<input class="form-control" type="text" name="Nombre" id="Nombre" value="{{ isset($propietarios->nombre)? $propietarios->nombre : '' }}">
</div>
    </div>
<br>
<div class="row">
        <div class="col-md-6">
<label class="control-label" for="Apellido">{{'Apellido'}}</label>
<input class="form-control" type="text" name="Apellido" id="Apellido" value="{{ isset($propietarios->apellido)? $propietarios->apellido : '' }}">
</div>
    </div>
<br>
<div class="row">
        <div class="col-md-6">
<label class="control-label" for="Edad">{{'Edad'}}</label>
<input class="form-control" type="text" name="Edad" id="Edad" value="{{ isset($propietarios->edad)? $propietarios->edad : '' }}">
</div>
    </div>
<br>
<div class="row">
        <div class="col-md-6">
<input class="btn btn-success" type="submit" value="Agregar">
<a class="btn btn-danger" href="{{url('propietarios')}}">Volver</a>
</div>
    </div>

</div>



<!-- JavaScript -->
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>