@extends('layouts.vehiculo')

@section('contenidovehiculo')

    
<br><br>
<div class="row">
        <div class="col-lg-11">
                <h2>VEHICULOS</h2>
        </div>
        <div class="mb-3 row">
            <a class="btn btn-success" href="{{ route('vehiculo.create') }}">Crear</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered table-striped mb-3 row">
        <tr>
        <th>id</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Numero de sillas</th>
                <th>Motor</th>
                <th>Estado</th>
                <th>Medida de ancho</th>
                <th>Medida de altura</th>
                <th width="280px">Accion</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($vehiculo as $vehiculo)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $vehiculo->Placa }}</td>
                <td>{{ $vehiculo->Marca }}</td>
                <td>{{ $vehiculo->Modelo }}</td>
                <td>{{ $vehiculo->Numero_sillas }}</td>
                <td>{{ $vehiculo->Motor }}</td>
                <td>{{ $vehiculo->Estado }}</td>
                <td>{{ $vehiculo->Medida_ancho }}</td>
                <td>{{ $vehiculo->Medida_altura }}</td>
                <td>
                    <form action="{{ route('vehiculo.destroy',$vehiculo->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('vehiculo.show',$vehiculo->id) }}">Mostrar</a>
                        <a class="btn btn-primary" href="{{ route('vehiculo.edit',$vehiculo->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection