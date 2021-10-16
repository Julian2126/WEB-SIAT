@extends('layouts.instituciones')

@section('contenidoinstituciones')
  
<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Instituciones</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/instituciones/create">NUEVO</a>
                    <br><br>
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <!-- <th>Nit</th> -->
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Id estudiante</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                        @if($instituciones==null)
                                <tr>
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($instituciones as $instituciones)
                                <tr>
                                    <td>{{$instituciones->id}}</td>
                                    <!-- <td>{{$instituciones->Nit}}</td> -->
                                    <td>{{$instituciones->Nombre}}</td>
                                    <td>{{$instituciones->Telefono}}</td>
                                    <td>{{$instituciones->Email}}</td>
                                    <td>{{$instituciones->Id_estudiante}}</td>

                                    <td>
                                        <form action="{{ route('instituciones.destroy', $instituciones->id)}}" method="POST">
                                            <a href="{{ route('instituciones.show', $instituciones->id) }}" class="btn btn-sm btn-info">Mostrar</a>
                                            <a href="{{ route('instituciones.edit',$instituciones->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
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


