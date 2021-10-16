@extends('layouts.rutas')

@section('contenidorutas')


<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Rutas</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">
                    @can ('crear rutas')
                    <a class="float-right ms-5 btn btn-success " href="{{ route('rutas.create') }}">Crear</a>
                    <br><br>
                    @endcan
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Numero de ruta</th>
                                <th>Numero de estudiantes</th>
                                <th>Origen</th>
                                <!-- <th>Latitud origen</th> -->
                                <!-- <th>Longitud origen</th>   -->
                                <th>Destino</th>
                                <!-- <th>Latitud destino</th> -->
                                <!-- <th>Longitud destino</th> -->
                                <th>Id_vehiculo</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                        @if($rutas==null)
                                <tr>
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($rutas as $rutas)
                                <tr>
                                    <td>{{$rutas->id}}</td>
                                    <td>{{$rutas->Numero_ruta}}</td>
                                    <td>{{$rutas->Numero_estudiantes}}</td>
                                    <td>{{$rutas->Origen}}</td>
                                    <!-- <td>{{$rutas->Latitud_origen}}</td> -->
                                    <!-- <td>{{$rutas->Longitud_origen}}</td> -->
                                    <td>{{$rutas->Destino}}</td>
                                    <!-- <td>{{$rutas->Latitud_destino}}</td> -->
                                    <!-- <td>{{$rutas->Longitud_destino}}</td> -->
                                    <td>{{$rutas->vehiculo_id}}</td>
                                    <td>

                                        <form action="{{ route('rutas.destroy',$rutas->id)}}" method="POST">    
                                            <a class="btn btn-sm btn-info" href="{{ route('rutas.show',$rutas->id) }}">Show</a>
                                            @can ('Modificar rutas')
                                            <a class="btn btn-sm btn-primary" href="{{ route('rutas.edit',$rutas->id) }}">Editar</a>
                                            @endcan
                                            @csrf 
                                            @method('DELETE')   
                                            @can ('Eliminar rutas')
                                            <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                        
                                        
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <br><br>
    </div>
</div>

@endsection