@extends('layouts.conductor')
@section('contenidoconductor')
@can ('Ver Conductor')

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Conductores</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                @can ('Crear Conductor')
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/conductor/create">NUEVO</a>
                    <br><br>
                    @endcan
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <!-- <th>Identificación</th> -->
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <!-- <th>Licencia de conducción</th> -->
                                <th>Telefono</th>
                                <!-- <th>Email</th> -->
                                <th>Id vehiculo</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @if($conductor==null)
                                <tr>
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($conductor as $conductor)
                                <tr>
                                    <td>{{$conductor->id}}</td>
                                    <!-- <td>{{$conductor->Numero_identificacion}}</td> -->
                                    <td>{{$conductor->Nombre}}</td>
                                    <td>{{$conductor->Apellido}}</td>
                                    <!-- <td>{{$conductor->Licencia_conduccion}}</td> -->
                                    <td>{{$conductor->Telefono}}</td>
                                    <!-- <td>{{$conductor->Email}}</td> -->
                                    <td>{{$conductor->Id_vehiculo}}</td>

                                    <td>
                                        <form action="{{ route('conductor.destroy', $conductor->id) }}" method="POST">
                                            <a href="{{ route('conductor.show', $conductor->id) }}" class="btn btn-sm btn-info">Mostrar</a>
                                            @can ('Modificar Conductor')
                                            <a href="{{ route('conductor.edit',$conductor->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can ('eliminar Conductor')
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
@endcan
@endsection