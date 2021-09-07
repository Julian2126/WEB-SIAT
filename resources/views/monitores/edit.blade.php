@extends('layouts.monitores')

@section('contenidomonitores')

<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Datos nuevo monitor:</h2>
      <div class="bg-secondary dropdown-divider"></div>
    </div>
    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            <form action="{{ route('monitores.uptade', $monitores->id) }}" method="POST">
            @csrf
              <div class="row">
                <div class="col-6 py-2">
                  <strong> NOMBRES:</strong>
                  <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{$monitores->Nombre}}"/>
                </div>
                <div class="col-6 py-2">
                  <strong> APELLIDOS:</strong>
                  <input type="text" class="form-control" id="Apellido" name="Apellido" value="{{$monitores->Apellido}}"/>
                </div>
                <div class="col-6 py-2">
                  <strong> IDENTIFICACIÓN:</strong>
                  <input type="text" class="form-control" id="Cedula_monitor" name="Cedula_monitor" value="{{$monitores->Cedula_monitor}}"/>
                </div>
                <div class="col-6 py-2">
                    <strong> TELEFONO:</strong>
                    <input type="text" class="form-control" id="Telefono" name="Telefono" value="{{$monitores->Telefono}}"/>
                  </div>
                  <div class="col-6 py-2">
                    <strong> E-MAIL: </strong>
                    <input type="text" class="form-control" id="Email" name="Email" value="{{$monitores->Email}}"/>
                  </div>
                  <div class="col-6 py-2">
                    <strong> ID RUTA:</strong>
                    <input type="text" class="form-control" id="Id_ruta" name="Id_ruta" value="{{$monitores->Id_ruta}}"/>
                  </div>
                  
                  <div class="row justify-content-center col-12 py-4">
                    <a href="/monitores" class="btn btn-danger col-5">Cancelar</a>
                    &nbsp; &nbsp;   
                    <button type="submit" class="btn btn-success col-5">Guardar</button>
                  </div>
              </div>
            </form>
          </div>
        </div>    
        
    </div>


@endsection