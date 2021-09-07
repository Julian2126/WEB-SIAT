@extends('layouts.alertas')

@section('contenidoalertas')
    

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Alertas</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/alertas/create">NUEVO</a>
                    <br><br>
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tipo</th>
                                <th>Remitente</th>
                                <th>Receptor</th>
                                <th>Id monitor</th>
                                <th>Id padre</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($alertas as $alertas)
                                <tr>
                                    <td>{{$alertas->id}}</td>
                                    <td>{{$alertas->Tipo}}</td>
                                    <td>{{$alertas->Remitente}}</td>
                                    <td>{{$alertas->Receptor}}</td>
                                    <td>{{$alertas->Id_monitor}}</td>
                                    <td>{{$alertas->Id_padre}}</td>

                                    <td>
                                        <form action="{{ route('alertas.destroy', $alertas->id)}}" method="POST">
                                            <a href="{{ route('alertas.show', $alertas->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('alertas.edit',$alertas->id) }}" class="btn btn-primary">Editar</a>
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

