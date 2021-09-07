@extends('layouts.app')
@section('content')

<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Datos nuevo monitor:</h2>
      <div class="bg-secondary dropdown-divider"></div>
    </div>
    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-6 py-2">
                  <strong> NOMBRES:</strong>
                  <input type="text" class="form-control" placeholder="Ej: Cristian">
                </div>
                <div class="col-6 py-2">
                  <strong> APELLIDOS:</strong>
                  <input type="text" class="form-control" placeholder="Ej: Perez">
                </div>
                <div class="col-6 py-2">
                  <strong> IDENTIFICACIÓN:</strong>
                  <input type="text" class="form-control" placeholder="Ej: 1074763971">
                </div>
                <div class="col-6 py-2">
                    <strong> TELEFONO:</strong>
                    <input type="text" class="form-control" placeholder="Ej: 3229873767">
                  </div>
                  <div class="col-6 py-2">
                    <strong> DIRECCIÓN:</strong>
                    <input type="text" class="form-control" placeholder="Ej: Cra4 n° 8-45">
                  </div>
                  <div class="col-6 py-2">
                    <strong> E-MAIL: </strong>
                    <input type="text" class="form-control" placeholder="Ej: siat@gmail.com">
                  </div>
                  <div class="col-6 py-2">
                    <strong> PAIS:</strong>
                    <input type="text" class="form-control" placeholder="Ej: Colombia">
                  </div>
                  <div class="col-6 py-2">
                    <strong> CIUDAD:</strong>
                    <input type="text" class="form-control" placeholder="Ej: Madrid">
                  </div>
                  <div class="col-6 py-2">
                    <strong> CARGO:</strong>
                    <input type="text" class="form-control" placeholder="Ej: Monitor">
                  </div>
                  <div class="col-6 py-2">
                    <div class="form-group">
                        <label for="exampleInputFile"><strong> HOJA DE VIDA: </strong> </label>
                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                      </div>
                  </div>
                  <div class="row justify-content-center col-12 py-4">
                    <a href="monitores" class="btn btn-danger col-5">Cancelar</a>
                    &nbsp; &nbsp;   
                    <button type="submit" class="btn btn-success col-5">Guardar</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
        
        
      </div>
@endsection