@extends('layouts.padres')

@section('contenidopadres')

    
<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Editar datos padre:</h2>
      <div class="bg-secondary dropdown-divider"></div>
    </div>
    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">

            <form action="{{ route('padres.update', $padres->id) }}" method="POST">
            @method('PATCH')
            @csrf
              <div class="row">
                <div class="col-6 py-2">
                  <strong> NOMBRES:</strong>
                  <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{$padres->Nombre}}"/>
                </div>
                <div class="col-6 py-2">
                  <strong> APELLIDOS:</strong>
                  <input type="text" class="form-control" id="Apellido" name="Apellido" value="{{$padres->Apellido}}"/>
                </div>
                <div class="col-6 py-2">
                  <strong> IDENTIFICACIÓN:</strong>
                  <input type="text" class="form-control" id="Cedula_padre" name="Cedula_padre" value="{{$padres->Cedula_padre}}"/>
                </div>
                <div class="col-6 py-2">
                    <strong> TELEFONO: </strong>
                    <input type="text" class="form-control" id="Telefono" name="Telefono" value="{{$padres->Telefono}}"/>
                </div>
                <div class="col-6 py-2">
                    <strong> E-MAIL: </strong>
                    <input type="text" class="form-control" id="Email" name="Email" value="{{$padres->Email}}"/>
                </div>
                <div class="col-6 py-2">
                    <strong> ID ESTUDIANTE:</strong>
                    <input type="text" class="form-control" id="Id_estudiante" name="Id_estudiante" value="{{$padres->Id_estudiante}}"/>
                </div>
                  
              
                  <div class="row justify-content-center col-12 py-4">     
                    <a href="/padres" class="btn btn-danger col-3">Cancelar</a>
                    &nbsp; &nbsp;
                    <button type="submit" class="btn btn-success col-3">Guardar</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
        
        
      </div>


@endsection