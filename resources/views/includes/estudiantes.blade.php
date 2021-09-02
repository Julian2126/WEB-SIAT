@extends('layouts.app')
@section('content')

<!-- 
<div class="row justify-content-center py-5">
    <img src="/img/SIAT.png" alt="" width="300">
  </div> -->
    <div class="bg-secondary dropdown-divider"></div>
    <h1 class="h3 mb-2 text-gray-800 text-success">Estudiantes</h1>
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
              <button type="submit" class="btn btn-success col-5">Buscar</button>
              <a href="estunuevo" class="btn btn-success col-5">Nuevo</a>
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
                                             <th>COLEGIO</th>
                                         </tr>
                                     </thead>
                         
                                     <tbody>
                                         <tr>
                                             <td>Juan</td>
                                             <td>Gomez Santana</td>
                                             <td class="table-info">Activo</td>
                                             <td>InstitucionPL</td>
                                             
                                         </tr>
                                         <tr>
                                             <td>Camilo</td>
                                             <td>Diaz Rodriguez</td>
                                             <td class="table-info">Activo</td>
                                             <td>InstitucionPL</td>
                                         <tr>
                                             <td>Cristian</td>
                                             <td>Gutierrez Ramirez</td>
                                             <td class="table-info">Activo</td>
                                             <td>InstitucionPL</td>
                                         </tr>
                                         <tr>
                                             <td>Julian</td>
                                             <td >Gonzalez</td>
                                             <td class="table-info">Activo</td>
                                             <td>InstitucionPL</td>
                                         </tr>
                                         <tr>
                                             <td>Mauricio </td>
                                             <td>Perez</td>
                                             <td class="table-info">Activo</td>
                                             <td>InstitucionPL</td>
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