<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropietarioVehiculo;
use App\Models\Propietarios;
use App\Models\Vehiculos;
use Illuminate\Support\Facades\DB;


class PropietarioVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['propietarios']=Propietarios::join("vehiculos", "vehiculos.propietario_id", "=", "propietarios.id")
        ->select('*')
        ->paginate(5);
        return view('propietario_vehiculo.index', $data);
        //dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propietario_vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'Cedula' => 'required|string|max:100',
            'Nombre' => 'required|string|max:100',
            'Apellido' => 'required|string|max:100',
            'Edad' => 'required|string|max:100',
            'Placa' => 'required|string|max:100',
            'Marca' => 'required|string|max:100',
            'Tipo' => 'required|string|max:100'
        ];
        $mensaje=["required"=>':attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $data=request()->all();
        $data=request()->except('_token','Placa','Marca','Tipo');
        Propietarios::insert($data);

        $id = DB::getPdo()->lastinsertid();

        $data=request()->except('_token','Cedula','Nombre','Apellido','Edad');
        $data['propietario_id'] = $id;
        vehiculos::insert($data);

        return redirect('propietario_vehiculo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropietarioVehiculo  $propietarioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(PropietarioVehiculo $propietarioVehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropietarioVehiculo  $propietarioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(PropietarioVehiculo $propietarioVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropietarioVehiculo  $propietarioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropietarioVehiculo $propietarioVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropietarioVehiculo  $propietarioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropietarioVehiculo $propietarioVehiculo)
    {
        //
    }
}
