@extends('layouts.estudiante')

@section('contenidoestudiante')

<div class="row">
        <div class="col-lg-11">
            <h2>EDITAR ESTUDIANTE</h2>
        </div>
        <div class="col-lg-1">
           <a class="btn btn-primary" href="/estudiante"> Back</a>
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


    <form action="{{ route('estudiante.update',$estudiante->id) }}" method="POST">
    @method('PATCH')
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Número de identificación</label>
            <input class="form-control" type="text" id="Numero_identificacion" name="Numero_identificacion" value="{{$estudiante->Numero_identificacion}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" value="{{$estudiante->Nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input class="form-control" type="text" id="Apellido" name="Apellido" value="{{$estudiante->Apellido}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Grado</label>
            <input class="form-control" type="text" id="Grado" name="Grado" value="{{$estudiante->Grado}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edad</label>
            <input class="form-control" type="number" id="Edad" name="Edad" value="{{$estudiante->Edad}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id_ruta</label>
            <input class="form-control" type="text" id="Id_ruta" name="Id_ruta" value="{{$estudiante->Id_ruta}}"/>
        </div>
    
        <a href="/estudiante" class="btn btn-secundary" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>

    </form>

@endsection