@extends('layouts.vehiculo')

@section('contenidovehiculo')

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Vehiculos</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="{{ route('vehiculo.create') }}">Crear</a>
                    <br><br>
                    <table class="table table-striped table-responsive">
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
                                <td  width="280px">
                                    <form action="{{ route('vehiculo.destroy',$vehiculo->id) }}" method="POST">
                                        <a class="btn btn-sm btn-info" href="{{ route('vehiculo.show',$vehiculo->id) }}">Mostrar</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('vehiculo.edit',$vehiculo->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                  
                </div>
            </div>
          
        </div>
        <br><br>
    </div>
</div>

@endsection