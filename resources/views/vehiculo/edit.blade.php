@extends('layouts.vehiculo')
@section('contenidovehiculo')

  <br><br>
  <div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-2 text-gray-800 text-success">Editar Vehiculos</h1>

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
    <form method="post" action="{{ route('vehiculo.update',$vehiculo->id) }}" >
        @method('PATCH')
        @csrf
        <div class="row">
          <div class="col-6">
            <strong> MARCA:</strong>
            <input type="text" class="form-control" id="txtMarca" value="{{$vehiculo->Marca}}" name="txtMarca">
          </div>
          <div class="col-6">
            <strong> MODELO:</strong>
            <input type="text" class="form-control" id="txtModelo" value="{{$vehiculo->Modelo}}" name="txtModelo">
          </div>
          <div class="col-6">
            <strong>PLACA:</strong>
            <input type="text" class="form-control" id="txtPlaca" name="txtPlaca" value="{{$vehiculo->Placa}}">
          </div>
          <div class="col-6">
            <strong>TIPO DE MOTOR:</strong>
            <input type="text" class="form-control" id="txtMotor" name="txtMotor" value="{{$vehiculo->Motor}}">
          </div>
          <div class="col-6">
            <strong> NUMERO DE PUESTOS:</strong>
            <input type="text" class="form-control" id="txtNumero_Sillas" name="txtNumero_sillas" value="{{$vehiculo->Numero_sillas}}">
          </div>
          <div class="col-6">
            <strong> Estado:</strong>
            <input type="text" class="form-control" id="txtEstado" value="{{$vehiculo->Estado}}" name="txtEstado">
          </div>
          <div class="col-6">
            <strong> ANCHURA:</strong>
            <input type="text" class="form-control" id="txtMedida_ancho" value="{{$vehiculo->Medida_ancho}}" name="txtMedida_ancho">
          </div>
          <div class="col-6">
            <strong> ALTURA:</strong>
            <input type="text" class="form-control" id="txtMedida_altura" value="{{$vehiculo->Medida_altura}}" name="txtMedida_altura">
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
