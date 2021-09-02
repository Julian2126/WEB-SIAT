@extends('layouts.app')
@section('content')

<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Datos Estuduante Nuevo:</h2>
      <div class="bg-secondary dropdown-divider"></div>
    </div>
    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-6 py-2">
                  <strong> NOMBRES:</strong>
                  <input type="text" class="form-control" placeholder="Ej: Alejandro">
                </div>
                <div class="col-6 py-2">
                  <strong> APELLIDOS:</strong>
                  <input type="text" class="form-control" placeholder="Ej: Torres">
                </div>
                <div class="col-6 py-2">
                  <strong> IDENTIFICACIÓN:</strong>
                  <input type="text" class="form-control" placeholder="Ej: 1074763971">
                </div>
                
                  <div class="col-6 py-2">
                    <strong> DIRECCIÓN:</strong>
                    <input type="text" class="form-control" placeholder="Ej: Cra5 n° 8-34">
                  </div>
                  <div class="col-12 py-2">
                    <strong> COLEGIO: </strong>
                    <input type="text" class="form-control" placeholder="Ej: InstitucionPL">
                  </div>
                  
              
                  <div class="row justify-content-center col-12 py-4"> 
                       <a href="estudiantes" class="btn btn-danger col-5">Cancelar</a>
                     &nbsp; &nbsp;  
                    <button type="submit" class="btn btn-success col-5">Guardar</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
        
        
      </div>

@endsection