<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vehiculo = Vehiculo::all();
        return view('vehiculo.list', compact('vehiculo', 'vehiculo'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehiculo.vehinuevo');
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
        $vehiculo = new Vehiculo([
            'Placa' => $request->get('txtPlaca'),
            'Marca'=> $request->get('txtMarca'),
            'Modelo'=> $request->get('txtModelo'),
            'Numero_sillas'=> $request->get('txtNumero_sillas'),
            'Motor'=> $request->get('txtMotor'),
            'Estado'=> $request->get('txtEstado'),
            'Medida_ancho'=> $request->get('txtMedida_ancho'),
            'Medida_altura'=> $request->get('txtMedida_altura')

        ]);
 
        $vehiculo->save();
        return redirect('vehiculo')->with('success', 'Vehiculo has been added');
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
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.view')->with('vehiculo', $vehiculo);
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
        $vehiculo = Vehiculo::findOrFail($id);
        return view('vehiculo.edit',['vehiculo'=>$vehiculo]);
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
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->Placa = $request->get('txtPlaca');
        $vehiculo->Marca = $request->get('txtMarca');
        $vehiculo->Modelo = $request->get('txtModelo');
        $vehiculo->Numero_sillas = $request->get('txtNumero_sillas');
        $vehiculo->Motor = $request->get('txtMotor');
        $vehiculo->Estado = $request->get('txtEstado');
        $vehiculo->Medida_ancho = $request->get('txtMedida_ancho');
        $vehiculo->Medida_altura = $request->get('txtMedida_altura');

        $vehiculo->update();

        return redirect('/vehiculo')->with('success', 'Vehiculo actualizado exitosamente');

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
        $vehiculo=Vehiculo::findOrFail($id);
        $vehiculo->delete();
        return redirect('/vehiculo')->with('success', 'Vehiculo borrado con exito');
    }
}
