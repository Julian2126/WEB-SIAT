<?php

namespace App\Http\Controllers;

use App\Models\Rutas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;


class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = ($request->get('texto'));
        $vehiculo = Vehiculo::all();
        
        $rutas = DB::select("SELECT * FROM rutas WHERE Destino like '%$texto%'");
        
        // $rutas = Rutas::all();
         
        return view('rutas.index', compact('rutas', 'texto', $vehiculo));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Vehiculos=Vehiculo::all();
    
        return view('rutas.create')->with('Vehiculos', $Vehiculos);
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
            'Origen' => $request->get('Origen'),
            'Latitud_origen' => $request->get('Latitud_origen'),
            'Longitud_origen' => $request->get('Longitud_origen'),
            'Destino' => $request->get('Destino'),
            'Latitud_destino' => $request->get('Latitud_destino'),
            'Longitud_destino' => $request->get('Longitud_destino'),
            'vehiculo_id' => $request->get('vehiculo_id')
        ]);
        //dd( $request->get('vehiculo_id'));
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
        $origenes = DB::select("SELECT Origen FROM rutas WHERE id=$id");
        $destinos = DB::select("SELECT Destino FROM rutas WHERE id=$id");
        $latOrigen = DB::select("SELECT Latitud_origen FROM rutas WHERE id=$id");
        $lonOrigen = DB::select("SELECT Longitud_origen FROM rutas WHERE id=$id");
        $latDestino = DB::select("SELECT Latitud_destino FROM rutas WHERE id=$id");
        $lonDestino = DB::select("SELECT Longitud_destino FROM rutas WHERE id=$id");
        $origenf=$origenes[0]->Origen;
        $destinof=$destinos[0]->Destino;
        $latOrigenf = $latOrigen[0]->Latitud_origen;
        $lonOrigenf = $lonOrigen[0]->Longitud_origen;
        $latDestinof = $latDestino[0]->Latitud_destino;
        $lonDestinof = $lonDestino[0]->Longitud_destino;

        return view('rutas.view',['origenf'=>$origenf, 'destinof'=>$destinof, 'latOrigenf'=>$latOrigenf, 'lonOrigenf'=>$lonOrigenf , 'latDestinof'=>$latDestinof, 'lonDestinof'=>$lonDestinof]);
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
        $rutas->Origen = $request->get('Origen');
        $rutas->Latitud_origen = $request->get('Latitud_origen');
        $rutas->Longitud_origen = $request->get('Longitud_origen');
        $rutas->Destino = $request->get('Destino');
        $rutas->Latitud_destino = $request->get('Latitud_destino');
        $rutas->Longitud_destino = $request->get('Longitud_destino');
        $rutas->vehiculo_id = $request->get('vehiculo_id');

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
