<?php

namespace App\Http\Controllers;

use App\Models\Instituciones;
use Illuminate\Http\Request;

class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instituciones = Instituciones::all();
        return view('instituciones.index')->with('instituciones', $instituciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('instituciones.create');
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
        $instituciones = new Instituciones([
            'Nit' => $request->get('Nit'),
            'Nombre' => $request->get('Nombre'),
            'Telefono' => $request->get('Telefono'),
            'Email' => $request->get('Email'),
            'Id_estudiante' => $request->get('Id_estudiante')
        ]);
        $instituciones->save();
        return redirect('instituciones')->with('success', 'Institucion ha sido agregada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $instituciones = Instituciones::find($id);
        return view('instituciones.view')->with('instituciones', $instituciones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $instituciones = Instituciones::findOrFail($id);
        return view('instituciones.edit',['instituciones'=>$instituciones]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $instituciones = instituciones::findOrFail($id);

        $instituciones->Nit = $request->get('Nit');
        $instituciones->Nombre = $request->get('Nombre');
        $instituciones->Telefono = $request->get('Telefono');
        $instituciones->Email = $request->get('Email');
        $instituciones->Id_estudiante = $request->get('Id_estudiante');

        $instituciones->save();

        return redirect('/instituciones')->with('success','Institucion ha sido editada.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $instituciones = Instituciones::findOrFail($id);
        $instituciones->delete();
        return redirect('/instituciones')->with('success','Institucion ha sido borrada.');

    }
}
