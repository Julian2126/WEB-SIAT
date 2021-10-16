<?php

namespace App\Http\Controllers;

use App\Models\Ficha_tecnica;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Ficha_tecnicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = ($request->get('texto'));
        
        $ficha_tecnica = DB::select("SELECT * FROM ficha_tecnicas WHERE Propietario like '%$texto%'");
        
         
        return view('ficha_tecnica.index', compact('ficha_tecnica', 'texto'));
        
        // $ficha_tecnica = Ficha_tecnica::all();
        // return view('ficha_tecnica.index')->with('ficha_tecnica', $ficha_tecnica);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       return view('ficha_tecnica.create');
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
        $ficha_tecnica = new Ficha_tecnica([
            'fecha_creacion' => $request->get('fecha_creacion'),
            'Propietario' => $request->get('Propietario'),
            'Soat' => $request->get('Soat'),
            'Tecnomecanica' => $request->get('Tecnomecanica'),
            'Id_vehiculo' => $request->get('Id_vehiculo')
        ]);
        $ficha_tecnica->save();
        return redirect('ficha_tecnica')->with('success', 'Ficha técnica ha sido agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ficha_tecnica  $ficha_tecnica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ficha_tecnica = Ficha_tecnica::find($id);
        return view('ficha_tecnica.view')->with('ficha_tecnica', $ficha_tecnica);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ficha_tecnica  $ficha_tecnica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ficha_tecnica = Ficha_tecnica::findOrFail($id);
        return view('ficha_tecnica.edit',['ficha_tecnica'=>$ficha_tecnica]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha_tecnica  $ficha_tecnica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ficha_tecnica = Ficha_tecnica::findOrFail($id);

        $ficha_tecnica->fecha_creacion = $request->get('fecha_creacion');
        $ficha_tecnica->Propietario = $request->get('Propietario');
        $ficha_tecnica->Soat = $request->get('Soat');
        $ficha_tecnica->Tecnomecanica = $request->get('Tecnomecanica');
        $ficha_tecnica->Id_vehiculo = $request->get('Id_vehiculo');

        $ficha_tecnica->save();

        return redirect('/ficha_tecnica')->with('success', 'Ficha técnica editada exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha_tecnica  $ficha_tecnica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ficha_tecnica = Ficha_tecnica::findOrFail($id);
        $ficha_tecnica->delete();
        return redirect('/ficha_tecnica')->with('success', 'Ficha técnica borrada.');
    }
}
