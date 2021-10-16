<?php

namespace App\Http\Controllers;

use App\Models\Padres;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PadresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = ($request->get('texto'));
        
        $padres = DB::select("SELECT * FROM padres WHERE Apellido like '%$texto%'");
        
         
        return view('padres.index', compact('padres', 'texto'));
        
        
        //
        // $padres = Padres::all();
        // return view('padres.index')->with('padres', $padres);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('padres.create');
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
        $padres = new Padres([
            'Cedula_padre' => $request->get('Cedula_padre'),
            'Nombre' => $request->get('Nombre'),
            'Apellido' => $request->get('Apellido'),
            'Telefono' => $request->get('Telefono'),
            'Email' => $request->get('Email'),
            'Id_estudiante' => $request->get('Id_estudiante')
        ]);
        $padres->save();
        return redirect('padres')->with('success', 'Padre ha sido agregado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $padres = Padres::find($id);
        return view('padres.view')->with('padres', $padres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $padres = Padres::findOrFail($id);
        return view('padres.edit',['padres'=>$padres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $padres = Padres::findOrFail($id);

        $padres->Cedula_padre = $request->get('Cedula_padre');
        $padres->Nombre = $request->get('Nombre');
        $padres->Apellido = $request->get('Apellido');
        $padres->Telefono = $request->get('Telefono');
        $padres->Email = $request->get('Email');
        $padres->Id_estudiante = $request->get('Id_estudiante');

        $padres->save();

        return redirect('/padres')->with('success','Padre ha sido editado.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $padres = Padres::findOrFail($id);
        $padres->delete();
        return redirect('/padres')->with('success','Padre ha sido borrado.');

    }
}
