<?php

namespace App\Http\Controllers;

use App\Models\ListarDatos;
use Illuminate\Http\Request;
use App\Models\Vehiculos;
use App\Models\Propietarios;
use Illuminate\Support\Facades\DB;

class ListarDatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'select marca, count(marca) count from vehiculos group by marca having count > 0';
        $data['listado'] = DB::select($sql);
        return view('listar_datos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListarDatos  $listarDatos
     * @return \Illuminate\Http\Response
     */
    public function show(ListarDatos $listarDatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListarDatos  $listarDatos
     * @return \Illuminate\Http\Response
     */
    public function edit(ListarDatos $listarDatos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListarDatos  $listarDatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListarDatos $listarDatos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListarDatos  $listarDatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListarDatos $listarDatos)
    {
        //
    }
}
