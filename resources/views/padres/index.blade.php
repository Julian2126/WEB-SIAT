@extends('layouts.padres')

@section('contenidopadres')


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

                    <a class="float-right ms-5 btn btn-success " href="{{ route('padres.create') }}">Crear</a>
                    <br><br>
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Número de cédula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Id estudiante</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($padres as $padres)
                                <tr>
                                    <td>{{$padres->id}}</td>
                                    <td>{{$padres->Cedula_padre}}</td>
                                    <td>{{$padres->Nombre}}</td>
                                    <td>{{$padres->Apellido}}</td>
                                    <td>{{$padres->Telefono}}</td>
                                    <td>{{$padres->Email}}</td>
                                    <td>{{$padres->Id_estudiante}}</td>

                                    <td>
                                        <form action="{{ route('padres.destroy', $padres->id)}}" method="POST">
                                            <a href="{{ route('padres.show', $padres->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('padres.edit',$padres->id) }}" class="btn btn-primary">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
           
           
        </div>

    <br><br>    
    </div>

</div>
               
@endsection

