<?php

namespace App\Http\Controllers;

use App\Models\Monitores;
use Illuminate\Http\Request;

class MonitoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $monitores = Monitores::all();
        return view('monitores.index')->with('monitores', $monitores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('monitores.create');
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
        $monitores = new Monitores([
            'Cedula_monitor' => $request->get('Cedula_monitor'),
            'Nombre' => $request->get('Nombre'),
            'Apellido' => $request->get('Apellido'),
            'Telefono' => $request->get('Telefono'),
            'Email' => $request->get('Email'),
            'Id_ruta' => $request->get('Id_ruta')
        ]);
        $monitores->save();
        return redirect('monitores')->with('success', 'Monitor ha sido agregado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $monitores = Monitores::find($id);
        return view('monitores.view')->with('monitores', $monitores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $monitores = Monitores::findOrFail($id);
        return view('monitores.edit',['monitores'=>$monitores]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $monitores = Monitores::findOrFail($id);

        $monitores->Cedula_monitor = $request->get('Cedula_monitor');
        $monitores->Nombre = $request->get('Nombre');
        $monitores->Apellido = $request->get('Apellido');
        $monitores->Telefono = $request->get('Telefono');
        $monitores->Email = $request->get('Email');
        $monitores->Id_ruta = $request->get('Id_ruta');

        $monitores->save();

        return redirect('/monitores')->with('success','Monitor ha sido editado.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $monitores = Monitores::findOrFail($id);
        $monitores->delete();
        return redirect('/monitores')->with('success','Monitor ha sido borrado.');
    }
}
