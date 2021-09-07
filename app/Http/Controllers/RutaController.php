<?php

namespace App\Http\Controllers;

use App\Models\Rutas;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rutas = Rutas::all();
        return view('rutas.index')->with('rutas', $rutas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rutas.create');
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
        $rutas = new Rutas([
            'Numero_ruta' => $request->get('Numero_ruta'),
            'Numero_estudiantes' => $request->get('Numero_estudiantes'),
            'Hubicacion_gps' => $request->get('Hubicacion_gps'),
            'Origen' => $request->get('Origen'),
            'Destino' => $request->get('Destino'),
            'Id_vehiculo' => $request->get('Id_vehiculo')
        ]);
        $rutas->save();
        return redirect('rutas')->with('success', 'Ruta ha sido agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rutas = Rutas::find($id);
        return view('rutas.view')->with('rutas', $rutas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutas = Rutas::findOrFail($id);
        return view('rutas.edit',['rutas'=>$rutas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rutas = Rutas::findOrFail($id);

        $rutas->Numero_ruta = $request->get('Numero_ruta');
        $rutas->Numero_estudiantes = $request->get('Numero_estudiantes');
        $rutas->Hubicacion_gps = $request->get('Hubicacion_gps');
        $rutas->Origen = $request->get('Origen');
        $rutas->Destino = $request->get('Destino');
        $rutas->Id_vehiculo = $request->get('Id_vehiculo');

        $rutas->save();

        return redirect('/rutas')->with('success', 'Rutas editada exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rutas = Rutas::findOrFail($id);
        $rutas->delete();
        return redirect('/rutas')->with('success', 'Ruta borrada.');
    }
}
