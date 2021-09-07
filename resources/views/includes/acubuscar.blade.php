@extends('layouts.app')
@section('content')

<div class="row justify-content-center py-3">
        
    <div class="card col-8 alert-success border-success">
      <div class="card-body">
        
        <h3 class="text-success" > <svg xmlns="http://www.w3.org/2000/svg" width="150" height="125" fill="" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg> Cristian Suarez</h3>
        <form>
          <div class="row">
            <div class="col-6 py-2 ">
              <strong> NOMBRES:</strong>
              <input class="form-control " id="disabledInput" type="text" placeholder="Cristian" disabled="">
              
            </div>
            <div class="col-6 py-2">
              <strong> APELLIDOS:</strong>
              <input class="form-control" id="disabledInput" type="text" placeholder="Suarez" disabled="">
             
            </div>
            <div class="col-6 py-2">
              <strong> IDENTIFICACIÓN:</strong>
              <input class="form-control" id="disabledInput" type="text" placeholder="1074763971" disabled="">
              
            </div>
              <div class="col-6 py-2">
                <strong> DIRECCIÓN:</strong>
                <input class="form-control" id="disabledInput" type="text" placeholder="Cra5 n° 8-34" disabled="">
              </div>
             
              <div class="col-6 py-2">
                <strong> TELEFONO:</strong>
                <input class="form-control" id="disabledInput" type="text" placeholder="32234567898" disabled="">
              </div>

              <div class="col-6 py-2">
                <strong> E-MAIL:</strong>
                <input class="form-control" id="disabledInput" type="text" placeholder="crisuarez@gmail.com" disabled="">
              </div>
             
          
            <div class="row justify-content-center col-12 py-4">     
              <button type="submit" class="btn btn-danger col-3">Cancelar</button>
              <button type="submit" class="btn btn-success col-3">Editar</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
@endsection