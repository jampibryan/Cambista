
@extends('adminlte::page')

@section('title', 'Sistema_Cambista')

@section('content_header')
    <h1>Registro de Compra</h1>
@stop

@section('content')

    <form action="{{ route('compras.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input id="dni" name="dni" type="number" class="form-control" tabindex="1" max_age="8" value="{{ old('dni') }}">
        </div>
        @error('dni')
            <small>*{{ $message }}</small>
        @enderror

        <select name="tipoMoneda" class="form-control">
            <option disabled selected>Tipo de moneda</option>
            <option value="dolar">Dolar</option>
            <option value="euro">Euro</option>
        </select>
        <br>

        @error('tipoMoneda')
            <small>*{{ $message }}</small>
        @enderror

        <div class="mb-3">
            <label for="montoComprar" class="form-label">Monto a comprar</label>
            <input id="montoComprar" name="montoComprar" type="number" class="form-control" tabindex="2"
                value="{{ old('montoComprar') }}">
        </div>
        @error('montoComprar')
            <small>*{{ $message }}</small>
        @enderror

        <a href="{{ route('compras.index') }}" class="btn btn-danger">Cancelar</a>
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
