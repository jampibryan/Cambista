@extends('adminlte::page')

@section('title', 'Sistema_Cambista')

@section('content_header')
    <h1>Registro de Cliente</h1>
@stop

@section('content')

    <form action="{{ route('clientes.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input id="dni" name="dni" type="number" class="form-control" tabindex="1" max_age="8" value="{{ old('dni') }}">
        </div>
        @error('dni')
            <small>*{{ $message }}</small>
        @enderror

        <div class="mb-3">
            <label for="nombres" class="form-label">Nombre</label>
            <input id="nombres" name="nombres" type="text" class="form-control" tabindex="2"
                value="{{ old('nombres') }}">
        </div>
        @error('nombres')
            <small>*{{ $message }}</small>
        @enderror

        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input id="celular" name="celular" type="number" class="form-control" tabindex="2"
                value="{{ old('celular') }}">
        </div>
        @error('celular')
            <small>*{{ $message }}</small>
        @enderror

        <a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
