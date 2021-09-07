<?php

namespace App\Http\Controllers;

use App\Models\Alertas;
use Illuminate\Http\Request;

class AlertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alertas = Alertas::all();
        return view('alertas.index')->with('alertas', $alertas);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alertas.create');
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
        $alertas = new alertas([
            'Tipo' => $request->get('Tipo'),
            'Remitente' => $request->get('Remitente'),
            'Receptor' => $request->get('Receptor'),
            'Id_monitor' => $request->get('Id_monitor'),
            'Id_padre' => $request->get('Id_padre')
        ]);
        $alertas->save();
        return redirect('alertas')->with('success', 'Alerta ha sido agregada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alertas  $alertas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $alertas = Alertas::find($id);
        return view('alertas.view')->with('alertas', $alertas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alertas  $alertas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $alertas = Alertas::findOrFail($id);
        return view('alertas.edit',['alertas'=>$alertas]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alertas  $alertas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $alertas = Alertas::findOrFail($id);

        $alertas->Tipo = $request->get('Tipo');
        $alertas->Remitente = $request->get('Remitente');
        $alertas->Receptor = $request->get('Receptor');
        $alertas->Id_monitor = $request->get('Id_monitor');
        $alertas->Id_padre = $request->get('Id_padre');

        $alertas->save();

        return redirect('/alertas')->with('success','Alerta ha sido editada.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alertas  $alertas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $alertas = Alertas::findOrFail($id);
        $alertas->delete();
        return redirect('/alertas')->with('success','Alerta ha sido borrada.');

    }
}
