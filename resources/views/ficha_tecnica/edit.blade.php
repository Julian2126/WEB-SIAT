@extends('layouts.ficha_tecnica')

@section('contenidoficha_tecnica')

<div class="row">
        <div class="col-lg-11">
            <h2>EDITAR FICHA TÉCNICA</h2>
        </div>
        <div class="col-lg-1">
           <a class="btn btn-primary" href="/ficha_tecnica"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong></strong> Tenemos problemas con el ingreso de datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('ficha_tecnica',$ficha_tecnica->id) }}" method="POST">
    @method('PATCH')
    @csrf 
    <div class="mb-3">
            <label for="" class="form-label">Fecha de creación</label>
            <input class="form-control" type="text" id="fecha_creacion" name="fecha_creacion" value="{{$ficha_tecnica->fecha_creacion}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Propietario</label>
            <input class="form-control" type="text" id="Propietario" name="Propietario" value="{{$ficha_tecnica->Propietario}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Soat</label>
            <input class="form-control" type="text" id="Soat" name="Soat" value="{{$ficha_tecnica->Soat}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tecnomecanica</label>
            <input class="form-control" type="text" id="Tecnomecanica" name="Tecnomecanica" value="{{$ficha_tecnica->Tecnomecanica}}"/>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Id Vehiculo</label>
            <input class="form-control" type="text" id="Id_vehiculo" name="Id_vehiculo" value="{{$ficha_tecnica->Id_vehiculo}}"/>
        </div>
    
        <a href="/ficha_tecnica" class="btn btn-danger" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>

    </form>

@endsection