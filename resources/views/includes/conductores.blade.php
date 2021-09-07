@extends('layouts.app')
@section('content')

  <div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-2 text-gray-800 text-success">Conductores</h1>

  <div class="row justify-content-center">
  <div class="card col-8 alert-success border-success ">
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-6">
            <strong> NOMBRES:</strong>
            <input type="text" class="form-control" placeholder="ej:Johan">
          </div>
          <div class="col-6">
            <strong> APELLIDOS:</strong>
            <input type="text" class="form-control" placeholder="ej:Mahecha">
          </div>
          <div class="col-6">
            <strong> IDENTIFICACIÓN:</strong>
            <input type="text" class="form-control" placeholder="ej:1074763971">
          </div>
        
          <div class="col-6 py-4">
            <a href="condubuscar">
            <button type="submit" class="btn btn-success col-5">Buscar</button></a>
            <a href="condunuevo" class="btn btn-success col-5">Nuevo</a>
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
                                           <th>NOMBRE</th>
                                           <th>APELLIDO</th>
                                           <th>ESTADO</th>
                                           <th>TELEFONO</th>
                                       </tr>
                                   </thead>
                       
                                   <tbody>
                                       <tr>
                                           <td>Julian</td>
                                           <td>Gomez Santana</td>
                                           <td class="table-info">Activo</td>
                                           <td>3203786721</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>Camilo</td>
                                           <td>Diaz Rodriguez</td>
                                           <td class="table-danger">Inactivo</td>
                                           <td>3128923003</td>
                                       <tr>
                                           <td>Cristian</td>
                                           <td>Gutierrez Ramirez</td>
                                           <td class="table-info">Activo</td>
                                           <td>3128973890</td>
                                       </tr>
                                       <tr>
                                           <td>Julian</td>
                                           <td >Gonzalez</td>
                                           <td class="table-danger">Inactivo</td>
                                           <td>3229874671</td>
                                       </tr>
                                       <tr>
                                           <td>Mauricio </td>
                                           <td>Perez</td>
                                           <td class="table-info">Activo</td>
                                           <td>3145437899</td>
                                       </tr>
                                       
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
