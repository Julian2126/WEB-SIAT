@extends('layouts.estudiante')

@section('contenidoestudiante')
@can ('Modificar Estudiantes')
<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Datos Nuevo Estudiante :</h2>
      <div class="bg-secondary dropdown-divider"></div>
    </div>
    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            <form action="{{ route('estudiante.update', $estudiante->id) }}" method="POST">
            @method('PATCH')
            @csrf
              <div class="row">
                <div class="col-6 py-2">
                  <strong> NOMBRES:</strong>
                  <input type="text" class="form-control" value="{{$estudiante->Nombre}}" id="Nombre" name="Nombre"/>
                </div>

                <div class="col-6 py-2">
                  <strong> APELLIDOS:</strong>
                  <input type="text" class="form-control"  value="{{$estudiante->Apellido}}"  id="Apellido" name="Apellido"/>
                </div>

                <div class="col-6 py-2">
                  <strong> IDENTIFICACIÓN:</strong>
                  <input type="text" class="form-control"  value="{{$estudiante->Numero_identificacion}}"  id="Numero_identificacion" name="Numero_identificacion"/>
                </div>
                
                  <div class="col-6 py-2">
                    <strong> GRADO:</strong>
                    <input type="text" class="form-control"  value="{{$estudiante->Grado}}" id="Grado" name="Grado">
                  </div>

                  <div class="col-6 py-2">
                    <strong> EDAD: </strong>
                    <input type="number" class="form-control"  value="{{$estudiante->Edad}}" id="Edad" name="Edad"/>
                  </div>

                  <div class="col-6 py-2">
                    <strong> ID RUTA: </strong>
                    <input type="text" class="form-control"  value="{{$estudiante->Id_ruta}}" id="Id_ruta" name="Id_ruta"/>
                  </div>
                  
              
                  <div class="row justify-content-center col-12 py-4"> 
                       <a href="/estudiante" class="btn btn-danger col-5">Cancelar</a>
                     &nbsp; &nbsp;  
                    <button type="submit" class="btn btn-success col-5">Guardar</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
        
        
      </div>

      @endcan
@endsection