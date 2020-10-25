<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Propietarios;
use App\Models\Vehiculos;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $placa = $request->get('buscarPlaca');
        $marca = $request->get('buscarMarca');
        $data['vehiculos'] = Vehiculos::placa($placa)->marca($marca)->paginate(5);
        return view('vehiculos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['propietarios'] = Propietarios::all();
        return  view('vehiculos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->all();
        $data=request()->except('_token');
        Vehiculos::insert($data);
        
        return redirect('vehiculos');
        // return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['vehiculos'] = Vehiculos::find($id);
        $data['propietarios'] = Propietarios::all();
        return  view('vehiculos.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_request=request()->except(['_token','_method']);
        Vehiculos::where('id','=',$id)->update($data_request);

        $data['vehiculos'] = Vehiculos::find($id);
        $data['propietarios'] = Propietarios::all();
        return redirect('vehiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehiculos::destroy($id);
        return redirect('vehiculos');
    }
}
