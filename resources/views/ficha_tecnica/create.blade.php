@extends('layouts.ficha_tecnica')

@section('contenidoficha_tecnica')

    <h1>CREAR REGISTRO</h1>

    <form action="{{ route('ficha_tecnica.store') }}" method="POST">
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Fecha de creación</label>
            <input class="form-control" type="text" id="fecha_creacion" name="fecha_creacion" tabindex="1"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Propietario</label>
            <input class="form-control" type="text" id="Propietario" name="Propietario" tabindex="2"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Soat</label>
            <input class="form-control" type="text" id="Soat" name="Soat" tabindex="3"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tecnomecanica</label>
            <input class="form-control" type="text" id="Tecnomecanica" name="Tecnomecanica" tabindex="4"/>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Id Vehiculo</label>
            <input class="form-control" type="text" id="Id_vehiculo" name="Id_vehiculo" tabindex="6"/>
        </div>
    
        <a href="/ficha_tecnica" class="btn btn-danger" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>

    </form>

@endsection