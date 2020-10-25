<!doctype html>
    <head>
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
    
    <div class="container">
    <br>
    <h2>Propietarios</h2>
    <br>
    <a class="btn btn-primary" href="{{url('/')}}">Inicio</a>
    <a class="btn btn-dark" href="{{url('propietarios')}}">Propietarios</a>
    <a class="btn btn-secondary" href="{{url('vehiculos')}}">Vehiculos</a>
    <a class="btn btn-secondary" href="{{url('propietario_vehiculo')}}">Vehiculo y Propietario Nuevo</a>
    <a class="btn btn-secondary" href="{{url('listar_datos')}}">Listar Marcas de Vehiculos</a>
    <br><br>



    <form action="">
        <div class="row">
            <div class="col-md-6">
                <input class="form-control" type="search" placeholder="Buscar por Cedula" name="buscarCedula">
                </div>
            <br><br>
            <div class="col-md-6">
                <input class="form-control" type="search" placeholder="Buscar por Nombre" name="buscarNombre">
            </div>
        </div>
        <br>
    <button class="btn btn-info" type="submit">Buscar Propietario</button>
    <a class="btn btn-success" href="{{url('propietarios/create')}}">Agregar Propietario</a>
    </form>
    <br>


    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($propietarios as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->cedula}}</td>
                <td>{{$value->nombre}}</td>
                <td>{{$value->apellido}}</td>
                <td>{{$value->edad}}</td>
                <td>
                <a class="btn btn-warning" href="{{ url('/propietarios/'. $value->id.'/edit') }}">Editar</a>
                <form style="display:inline" method="post" action="{{ url('/propietarios/'. $value->id) }}">
                    {{csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿borrar?');">Borrar</button>
                </form>
                
                </td>
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