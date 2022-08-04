@extends('adminlte::page')

@section('title', 'Sistema_Cambista')

@section('content_header')
    <h1>VENTAS REGISTRADAS</h1>
@stop

@section('content')

    <a class="w-16 bg-blue-400 py-2 px-4 italic text-2xl" href="{{ route('ventas.create') }}">Registrar
        Venta</a>

    <div class="container mt-10">
        <ul> *El cliente llega para comprar dólares o euros
            <li>$ 1 = S/. 4</li>
            <li>€ 1 = S/. 4.1</li>
        </ul>
    </div>


    <div class="container flex justify-center mt-4">
        <table class="bg-blue-400 border-8 border-double border-red-400">
            <thead>
                <tr>
                    <th class="border text-center px-8 py-2 italic text-2xl">DNI</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">TIPO DE MONEDA</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">MONTO MONEDA</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">MONTO A RECIBIR</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">ACCIONES</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        </td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $venta->dni }}
                        </td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            {{ $venta->tipoMoneda }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            @if ($venta->tipoMoneda == 'dolar')
                                <h6> $ {{ $venta->montoVender }} </h6>
                            @elseif ($venta->tipoMoneda == 'euro')
                                <h6> € {{ $venta->montoVender }} </h6>
                            @endif

                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            @if ($venta->tipoMoneda == 'dolar')
                                <h6> S/. {{ $venta->montoVender * 4 }} </h6>
                            @elseif ($venta->tipoMoneda == 'euro')
                                <h6> S/. {{ $venta->montoVender * 4.1 }}</h6>
                            @endif
                        </td>

                        <td class="border text-center px-4 py-2 italic text-base">
                            <a href="{{ route('ventas.edit', $venta) }}" class="bg-red-400 p-2">Editar</a>
                            <form action="{{ route('ventas.destroy', $venta) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="bg-black p-2 text-white mt-2">Eliminar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        console.log('Hi!');
    </script>
@stop
