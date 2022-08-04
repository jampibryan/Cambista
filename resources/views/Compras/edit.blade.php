@extends('adminlte::page')

@section('title', 'Sistema_Cambista')

@section('content_header')
    <h1>Editar Compras</h1>
@stop

@section('content')
    <form action="{{ route('compras.update', $compra) }}" method="post">
        @csrf

        @method('put')


        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input id="dni" name="dni" type="text" class="form-control" tabindex="1"
                value="{{ old('dni', $compra->dni) }}">
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
            <label for="montoComprar" class="form-label">MONTO MONEDA</label>
            <input id="montoComprar" name="montoComprar" type="text" class="form-control" tabindex="2"
                value="{{ old('montoComprar', $compra->montoComprar) }}">
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
