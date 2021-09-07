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
            <form action="{{ route('monitores.store') }}" method="POST">
            @csrf
              <div class="row">
                <div class="col-6 py-2">
                  <strong> NOMBRES:</strong>
                  <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ej: Cristian">
                </div>
                <div class="col-6 py-2">
                  <strong> APELLIDOS:</strong>
                  <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ej: Perez">
                </div>
                <div class="col-6 py-2">
                  <strong> IDENTIFICACIÓN:</strong>
                  <input type="text" class="form-control" id="Cedula_monitor" name="Cedula_monitor" placeholder="Ej: 1074763971">
                </div>
                <div class="col-6 py-2">
                    <strong> TELEFONO:</strong>
                    <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Ej: 3229873767">
                  </div>
                  <div class="col-6 py-2">
                    <strong> E-MAIL: </strong>
                    <input type="text" class="form-control" id="Email" name="Email" placeholder="Ej: siat@gmail.com">
                  </div>
                  <div class="col-6 py-2">
                    <strong> ID RUTA:</strong>
                    <input type="text" class="form-control" id="Id_ruta" name="Id_ruta" placeholder="Ej: Id ruta">
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