@extends('layouts.app')
@section('content')
  <div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-2 text-gray-800 text-success">Vehiculos</h1>
  <div class="row justify-content-center">
  <div class="card col-8 alert-success border-success">
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-6">
            <strong> MARCA:</strong>
            <input type="text" class="form-control" placeholder="ej:chevrolet">
          </div>
          <div class="col-6">
            <strong> PLACA:</strong>
            <input type="text" class="form-control" placeholder="ej:KLF34E">
          </div>
          <div class="col-6">
            <strong> Conductor:</strong>
            <input type="text" class="form-control" placeholder="ej:Juan Camilo">
          </div>
          <div class="col-6 py-4">
            <a href="condubuscar">
            <button type="submit" class="btn btn-success col-5">Buscar</button></a>
            <a href="{{ route('vehiculo.create') }}" class="btn btn-success col-5">Nuevo</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="bg-secondary dropdown-divider"></div>
<div class="container-fluid">
                   <!-- Page Heading -->
                   <div class="card shadow mb-4">
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead class="table-success">
                                       <tr>
                                           <th>MARCA</th>
                                           <th>PLACA</th>
                                           <th>CONDUCTOR</th>
                                       </tr>
                                   </thead>
                                   <tbody>
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
                                                              </tbody>
                                                          </table>
                                                          <div>
                            <ul class="pagination pagination-sm">
                              <li class="page-item disabled">
                                <a class="page-link" href="#">&laquo;</a>
                              </li>
                              <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">4</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">5</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">&raquo;</a>
                              </li>
                            </ul>
                            </div>
                            @endsection