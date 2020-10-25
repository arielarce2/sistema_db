<?php

namespace App\Http\Controllers;

use App\Models\Propietarios;
use Illuminate\Http\Request;

class PropietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cedula = $request->get('buscarCedula');
        $nombre = $request->get('buscarNombre');
        $data['propietarios'] = Propietarios::nombre($nombre)->cedula($cedula)->paginate(5);
        return view('propietarios.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propietarios.create');
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
        Propietarios::insert($data);

        return redirect('propietarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function show(Propietarios $propietarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['propietarios'] = Propietarios::find($id);
        return  view('propietarios.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_request=request()->except(['_token','_method']);
        Propietarios::where('id','=',$id)->update($data_request);

        $data['propietarios'] = Propietarios::find($id);
        return redirect('propietarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Propietarios::destroy($id);
        return redirect('propietarios');
    }
}
