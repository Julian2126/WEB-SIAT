@extends('layouts.estudiante')

@section('contenidoestudiante')

    <h1>CREAR REGISTRO</h1>

    <form action="{{ route('estudiante.store') }}" method="POST">
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Número de identificación</label>
            <input class="form-control" type="text" id="Numero_identificacion" name="Numero_identificacion" tabindex="1"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" tabindex="2"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input class="form-control" type="text" id="Apellido" name="Apellido" tabindex="3"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Grado</label>
            <input class="form-control" type="text" id="Grado" name="Grado" tabindex="4"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edad</label>
            <input class="form-control" type="number" id="Edad" name="Edad" tabindex="5"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id_ruta</label>
            <input class="form-control" type="text" id="Id_ruta" name="Id_ruta" tabindex="6"/>
        </div>
    
        <a href="/estudiante" class="btn btn-secundary" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>

    </form>

@endsection