




<!doctype html>
    <head>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div class="container">
    <br>

    <h2>{{ $Modo=='crear' ? 'Agregar Vehiculo':'Modificar Vehiculo'}}</h2>

    <br>
    <div class="row">
        <div class="col-md-6">
            <label class="control-label"for="Propietarios">{{'Propietarios'}}</label>
            <select class="form-control" name="propietario_id">
                <option value="">Seleccione</option>
                @foreach ($propietarios as $value)
                <option value="{{ $value->id }}" {{ isset($vehiculos->propietario_id)? $vehiculos->propietario_id == $value->id ? 'selected' : '' : '' }}>{{ $value->nombre }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <label class="control-label" for="Placa">{{'Placa'}}</label>
            <input class="form-control" type="text" name="Placa" id="Placa" value="{{ isset($vehiculos->placa)? $vehiculos->placa : '' }}">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <label class="control-label" for="Marca">{{'Marca'}}</label>
            <input class="form-control" type="text" name="Marca" id="Marca" value="{{ isset($vehiculos->marca)? $vehiculos->marca : '' }}">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <label class="control-label" for="Tipo">{{'Tipo'}}</label>
            <input class="form-control" type="text" name="Tipo" id="Tipo" value="{{ isset($vehiculos->tipo)? $vehiculos->tipo : '' }}">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <input class="btn btn-success" type="submit" value="Agregar">
            <a class="btn btn-danger" href="{{url('vehiculos')}}">Volver</a>
        </div>
    </div>
    
   </div>



        <!-- JavaScript -->
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>

