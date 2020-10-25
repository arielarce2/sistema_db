

<!doctype html>
    <head>
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
    
    <div class="container">
    <br>
    <h2>Vehiculo y Propietario Nuevo</h2>
    <br>
    <a class="btn btn-primary" href="{{url('/')}}">Inicio</a>
    <a class="btn btn-secondary" href="{{url('propietarios')}}">Propietarios</a>
    <a class="btn btn-secondary" href="{{url('vehiculos')}}">Vehiculos</a>
    <a class="btn btn-dark" href="{{url('propietario_vehiculo')}}">Vehiculo y Propietario Nuevo</a>
    <a class="btn btn-secondary" href="{{url('listar_datos')}}">Listar Marcas de Vehiculos</a>
    <br><br>


    <a class="btn btn-success" href="{{url('propietario_vehiculo/create')}}">Cargar Nuevo Propietario y Vehiculo</a>
    <br><br>

    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($propietarios as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->placa}}</td>
                <td>{{$value->marca}}</td>
                <td>{{$value->tipo}}</td>
                <td>{{$value->cedula}}</td>
                <td>{{$value->nombre}}</td>
                <td>{{$value->apellido}}</td>
                <td>{{$value->edad}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $propietarios->links('pagination::bootstrap-4') }}


        
    </div>



        <!-- JavaScript -->
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>