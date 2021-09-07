<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiante = Estudiante::all();
        return view('estudiante.index')->with('estudiante', $estudiante);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiante.create');
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
        $estudiante = new Estudiante([
            'Numero_identificacion' => $request->get('Numero_identificacion'),
            'Nombre' => $request->get('Nombre'),
            'Apellido' => $request->get('Apellido'),
            'Grado' => $request->get('Grado'),
            'Edad' => $request->get('Edad'),
            'Id_ruta' => $request->get('Id_ruta')
        ]);
        $estudiante->save();
        return redirect('estudiante')->with('success', 'Estudiante ha sido agregado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $estudiante = Estudiante::find($id);
        return view('estudiante.view')->with('estudiante', $estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiante.edit',['estudiante'=>$estudiante]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $estudiante = Estudiante::findOrFail($id);

        $estudiante->Numero_identificacion = $request->get('Numero_identificacion');
        $estudiante->Nombre = $request->get('Nombre');
        $estudiante->Apellido = $request->get('Apellido');
        $estudiante->Grado = $request->get('Grado');
        $estudiante->Edad = $request->get('Edad');
        $estudiante->Id_ruta = $request->get('Id_ruta');

        $estudiante->save();

        return redirect('/estudiante')->with('success','Estudiante ha sido editado.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect('/estudiante')->with('success','Estudiante ha sido borrado.');

    }
}
