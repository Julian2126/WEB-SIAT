@extends('layouts.ficha_tecnica')

@section('contenidoficha_tecnica')
    
<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Estudiantes</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/ficha_tecnica/create">NUEVO</a>
                    <br><br>
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Fecha de creación</th>
                                <th>Propietario</th>
                                <th>Soat</th>
                                <th>Tecnomecanica</th>
                                <th>Id vehiculo</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($ficha_tecnica as $ficha_tecnica)
                                <tr>
                                    <td>{{$ficha_tecnica->id}}</td>
                                    <td>{{$ficha_tecnica->fecha_creacion}}</td>
                                    <td>{{$ficha_tecnica->Propietario}}</td>
                                    <td>{{$ficha_tecnica->Soat}}</td>
                                    <td>{{$ficha_tecnica->Tecnomecanica}}</td>
                                    <td>{{$ficha_tecnica->Id_vehiculo}}</td>

                                    <td>
                                        <form action="{{ route('ficha_tecnica.destroy', $ficha_tecnica->id)}}" method="POST">
                                            <a href="{{ route('ficha_tecnica.show', $ficha_tecnica->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('ficha_tecnica.edit',$ficha_tecnica->id) }}" class="btn btn-primary">Editar</a>
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

