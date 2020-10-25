<!doctype html>
    <head>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div class="container">
    <br>

    <h2>{{ $Modo=='crear' ? 'Agregar Registro':'Modificar Registro'}}</h2>

        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <br>
    <h2>Datos del Propietario</h2>
    <br>
    <div class="row">
            <div class="col-md-6">
    <label class="control-label" for="Cedula">{{'Cedula'}}</label>
    <input class="form-control" type="text" name="Cedula" id="Cedula" value="">
    </div>
        </div>
    <br>
    <div class="row">
            <div class="col-md-6">
    <label class="control-label" for="Nombre">{{'Nombre'}}</label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="">
    </div>
        </div>
    <br>
    <div class="row">
            <div class="col-md-6">
    <label class="control-label" for="Apellido">{{'Apellido'}}</label>
    <input class="form-control" type="text" name="Apellido" id="Apellido" value="">
    </div>
        </div>
    <br>
    <div class="row">
            <div class="col-md-6">
    <label class="control-label" for="Edad">{{'Edad'}}</label>
    <input class="form-control" type="text" name="Edad" id="Edad" value="">
    </div>
        </div>
        <br><br>
    <h2>Datos del Vehiculo</h2>
    <br>
    <div class="row">
            <div class="col-md-6">
    <label class="control-label" for="Placa">{{'Placa'}}</label>
    <input class="form-control" type="text" name="Placa" id="Placa" value="">
    </div>
        </div>
    <br>
    <div class="row">
            <div class="col-md-6">
    <label class="control-label" for="Marca">{{'Marca'}}</label>
    <input class="form-control" type="text" name="Marca" id="Marca" value="">
    </div>
        </div>
    <br>
    <div class="row">
            <div class="col-md-6">
    <label class="control-label" for="Tipo">{{'Tipo'}}</label>
    <input class="form-control" type="text" name="Tipo" id="Tipo" value="">
    </div>
        </div>
    <br>
    <div class="row">
            <div class="col-md-6">
    <input class="btn btn-success" type="submit" value="Agregar">
    <a class="btn btn-danger" href="{{url('propietario_vehiculo')}}">Volver</a>
    </div>
        </div>


    </div>



    <!-- JavaScript -->
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
    </html>