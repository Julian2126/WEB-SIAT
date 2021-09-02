@extends('layouts.alertas')

@section('contenidoalertas')

    <h1>CREAR REGISTRO</h1>

    <form action="{{ route('alertas.store') }}" method="POST">
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Tipo</label>
            <input class="form-control" type="text" id="Tipo" name="Tipo" tabindex="1"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Remitente</label>
            <input class="form-control" type="text" id="Remitente" name="Remitente" tabindex="2"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Receptor</label>
            <input class="form-control" type="text" id="Receptor" name="Receptor" tabindex="3"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id Monitor</label>
            <input class="form-control" type="text" id="Id_monitor" name="Id_monitor" tabindex="4"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id padre</label>
            <input class="form-control" type="text" id="Id_padre" name="Id_padre" tabindex="5"/>
        </div>
    
        <a href="/alertas" class="btn btn-secundary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>

    </form>

@endsection