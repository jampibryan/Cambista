
@extends('adminlte::page')

@section('title', 'Sistema_Cambista')

@section('content_header')
    <h1>Registro de Venta</h1>
@stop

@section('content')

    <form action="{{ route('ventas.store') }}" method="post">
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
            <option value="dolar">Dólar</option>
            <option value="euro">Euro</option>
        </select>
        <br>

        @error('tipoMoneda')
            <small>*{{ $message }}</small>
        @enderror

        <div class="mb-3">
            <label for="montoVender" class="form-label">Monto a vender</label>
            <input id="montoVender" name="montoVender" type="number" class="form-control" tabindex="2"
                value="{{ old('montoVender') }}">
        </div>
        @error('montoVender')
            <small>*{{ $message }}</small>
        @enderror

        <a href="{{ route('ventas.index') }}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Registrar</button>
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
