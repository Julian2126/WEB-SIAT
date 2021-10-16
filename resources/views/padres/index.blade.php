@extends('layouts.padres')

@section('contenidopadres')


<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Acudientes</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">
                    @can ('Crear Padres')
                    <a class="float-right ms-5 btn btn-success " href="{{ route('padres.create') }}">Crear</a>
                    <br><br>
                    @endcan
                    <table class="table table-striped mt-4">
                      
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Número de cédula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Teléfono</th>
                                <!-- <th>Email</th> -->
                                <th>Id estudiante</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                        @if($padres==null)
                                <tr>
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($padres as $padres)
                                <tr>
                                    <td>{{$padres->id}}</td>
                                    <td>{{$padres->Cedula_padre}}</td>
                                    <td>{{$padres->Nombre}}</td>
                                    <td>{{$padres->Apellido}}</td>
                                    <td>{{$padres->Telefono}}</td>
                                    <!-- <td>{{$padres->Email}}</td> -->
                                    <td>{{$padres->Id_estudiante}}</td>

                                    <td>
                                        <form action="{{ route('padres.destroy', $padres->id)}}" method="POST">
                                            <a href="{{ route('padres.show', $padres->id) }}" class="btn btn-sm btn-info">Mostrar</a>
                                            @can ('Modificar Padres')
                                            <a href="{{ route('padres.edit',$padres->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can ('Eliminar Padres')
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

