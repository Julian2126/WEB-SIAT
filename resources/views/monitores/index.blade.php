@extends('layouts.monitores')

@section('contenidomonitores')
  
    

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Monitores</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="{{ route('monitores.create') }}">Crear</a>
                    <br><br>
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Cédula monitor</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Id ruta</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($monitores as $monitores)
                                <tr>
                                    <td>{{$monitores->id}}</td>
                                    <td>{{$monitores->Cedula_monitor}}</td>
                                    <td>{{$monitores->Nombre}}</td>
                                    <td>{{$monitores->Apellido}}</td>
                                    <td>{{$monitores->Telefono}}</td>
                                    <td>{{$monitores->Email}}</td>
                                    <td>{{$monitores->Id_ruta}}</td>

                                    <td>
                                        <form action="{{ route('monitores.destroy', $monitores->id) }}" method="POST">
                                            <a href="{{ route('monitores.show', $monitores->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('monitores.edit',$monitores->id) }}" class="btn btn-primary">Editar</a>
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


