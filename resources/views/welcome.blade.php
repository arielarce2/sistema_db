<!doctype html>
    <head>
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
    
    <div class="container">
    <br>
    <h2>Sistema de Administración de Vehiculos</h2>
    <br>
    <a class="btn btn-primary" href="{{url('/')}}">Inicio</a>
    <a class="btn btn-secondary" href="{{url('propietarios')}}">Propietarios</a>
    <a class="btn btn-secondary" href="{{url('vehiculos')}}">Vehiculos</a>
    <a class="btn btn-secondary" href="{{url('propietario_vehiculo')}}">Vehiculo y Propietario Nuevo</a>
    <a class="btn btn-secondary" href="{{url('listar_datos')}}">Listar Marcas de Vehiculos</a>
    <br><br>

 

    </div>



        <!-- JavaScript -->
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>