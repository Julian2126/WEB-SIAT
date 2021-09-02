<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $conductor = Conductor::all();
        return view('conductor.index')->with('conductor', $conductor);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('intentando ingresar');
        return view('conductor.create');
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
        $conductor = new Conductor();

        $conductor->Numero_identificacion = $request->get('Numero_identificacion');
        $conductor->Nombre = $request->get('Nombre');
        $conductor->Apellido = $request->get('Apellido');
        $conductor->Licencia_conduccion = $request->get('Licencia_conduccion');
        $conductor->Telefono = $request->get('Telefono');
        $conductor->Email = $request->get('Email');
        $conductor->Id_vehiculo = $request->get('Id_vehiculo');

        $conductor->save();

        return redirect('/conductor')->with('success','Conductor ha sido agregado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $conductor = Conductor::find($id);
        return view('conductor.view')->with('conductor', $conductor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $conductor = Conductor::findOrFail($id);
        return view('conductor.edit',['conductor'=>$conductor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $conducto = Conductor::find($id);

        $conductor->Numero_identificacion = $request->get('Numero_identificacion');
        $conductor->Nombre = $request->get('Nombre');
        $conductor->Apellido = $request->get('Apellido');
        $conductor->Licencia_conduccion = $request->get('Licencia_conduccion');
        $conductor->Telefono = $request->get('Telefono');
        $conductor->Email = $request->get('Email');
        $conductor->Id_vehiculo = $request->get('Id_vehiculo');

        $conductor->save();

        return redirect('/conductor')->with('success','Conductor ha sido editado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $conductor = Conductor::findOrFail($id);
        $conductor->delete(); 
        return redirect('/conductor')->with('success','Conductor ha sido borrado');
    }
}
