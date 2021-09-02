@extends('layouts.vehiculo')
@section('contenidovehiculo')

  <br><br>
  <div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-2 text-gray-800 text-success">Crear Vehiculos</h1>

  <div class="row justify-content-center">
  <div class="card col-8 alert-success border-success ">
    <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Advertencia</strong> Hubo problemas con su registro.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <form action="{{ route('vehiculo.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-6">
            <strong> MARCA:</strong>
            <input type="text" class="form-control" id="txtMarca" placeholder="Ejemplo:Toyota" name="txtMarca">
          </div>
          <div class="col-6">
            <strong> MODELO:</strong>
            <input type="text" class="form-control" id="txtModelo" placeholder="Ejemplo: 2021" name="txtModelo">
          </div>
          <div class="col-6">
            <strong>PLACA:</strong>
            <input type="text" class="form-control" id="txtPlaca" name="txtPlaca" placeholder="Ejemplo:KLF349">
          </div>
          <div class="col-6">
            <strong>TIPO DE MOTOR:</strong>
            <input type="text" class="form-control" id="txtMotor" name="txtMotor" placeholder="Ejemplo:eléctrica, diesel, gasolina, etc">
          </div>
          <div class="col-6">
            <strong> NUMERO DE PUESTOS:</strong>
            <input type="text" class="form-control" id="txtNumero_Sillas" name="txtNumero_sillas" placeholder="Ejemplo:32">
          </div>
          <div class="col-6">
            <strong> ESTADO:</strong>
            <input type="text" class="form-control" id="txtEstado" placeholder="Ejemplo:activo" name="txtEstado">
          </div>
          <div class="col-6">
            <strong> ANCHURA:</strong>
            <input type="text" class="form-control" id="txtMedida_Ancho" placeholder="Digite medida de ancho" name="txtMedida_ancho">
          </div>
          <div class="col-6">
            <strong> ALTURA:</strong>
            <input type="text" class="form-control" id="txtMedida_altura" placeholder="Digite medida de altura" name="txtMedida_altura">
          </div>
          <div class="col-6 py-4">
            <a href="{{ url('vehiculo') }}" class="btn btn-danger col-5">Cancelar</a>
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
