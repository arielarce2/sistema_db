<!doctype html>
    <head>
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
    
    <div class="container">
    <br>
    <h2>Lista de Marcas de Vehiculos</h2>
    <br>
    <a class="btn btn-primary" href="{{url('/')}}">Inicio</a>
    <a class="btn btn-secondary" href="{{url('propietarios')}}">Propietarios</a>
    <a class="btn btn-secondary" href="{{url('vehiculos')}}">Vehiculos</a>
    <a class="btn btn-secondary" href="{{url('propietario_vehiculo')}}">Vehiculo y Propietario Nuevo</a>
    <a class="btn btn-dark" href="{{url('listar_datos')}}">Listar Marcas de Vehiculos</a>
    <br><br>



        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Marca</th>
                    <th>Cantidad de Vehiculos</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($listado as $value)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ ucfirst(trans($value->marca)) }}</td>
                    <td>{{$value->count}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>



    <!-- JavaScript -->
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>