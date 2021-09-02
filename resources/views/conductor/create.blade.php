@extends('layouts.conductor')

@section('contenidoconductor')

    <h1>CREAR REGISTRO</h1>

    <form action="{{ route('conductor.store') }}" method="POST">
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Numero de identificacion</label>
            <input class="form-control" type="text" id="Numero_identificacion" name="Numero_identificacion" tabindex="1"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" tabindex="2"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input class="form-control" type="text" id="Apelllido" name="Apellido" tabindex="3"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Licencia de conducción</label>
            <input class="form-control" type="text" id="Licencia_conduccion" name="Licencia_conduccion" tabindex="4"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input class="form-control" type="text" id="Telefono" name="Telefono" tabindex="5"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input class="form-control" type="text" id="Email" name="Email" tabindex="6"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id vehiculo</label>
            <input class="form-control" type="text" id="Id_vehiculo" name="Id_vehiculo" tabindex="7"/>
        </div>
    
        <a href="/conductor" class="btn btn-danger" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>

    </form>

@endsection