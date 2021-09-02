@extends('layouts.app')
@section('content')

  <div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-2 text-gray-800 text-success">Crear Vehiculos</h1>

  <div class="row justify-content-center">
  <div class="card col-8 alert-success border-success ">
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-6">
            <strong> MARCA:</strong>
            <input type="text" class="form-control" placeholder="ej:Toyota.">
          </div>
          <div class="col-6">
            <strong> MODELO:</strong>
            <input type="text" class="form-control" placeholder="ej:2021">
          </div>
          <div class="col-6">
            <strong>PLACA:</strong>
            <input type="text" class="form-control" placeholder="ej:KLF34E">
          </div>
          <div class="col-6">
            <strong>TIPO DE MOTOR:</strong>
            <input type="text" class="form-control" placeholder="ej:eléctrica, de combustibles fósiles, etc">
          </div>
          <div class="col-6">
            <strong> NUMERO DE PUESTOS:</strong>
            <input type="text" class="form-control" placeholder="32">
          </div>
          <div class="col-6">
            <strong> ALTURA:</strong>
            <input type="text" class="form-control" placeholder="ej:">
          </div>
          <div class="col-6">
            <strong> ANCHURA:</strong>
            <input type="text" class="form-control" placeholder="ej:">
          </div>
          <div class="col-6">
            <strong> ALTURA:</strong>
            <input type="text" class="form-control" placeholder="ej:">
          </div>
          <div class="col-6">
            <strong> ALTURA:</strong>
            <input type="text" class="form-control" placeholder="ej:">
          </div>
          <div class="col-6 py-4">
            <a href="vehiculo" class="btn btn-danger col-5">Cancelar</a>
                     &nbsp; &nbsp;  
            <button type="submit" class="btn btn-success col-5">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>  
<div class="bg-secondary dropdown-divider"></div>

@endsection
