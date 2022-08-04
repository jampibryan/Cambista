@extends('adminlte::page')

@section('title', 'Sistema_Cambista')

@section('content_header')
    <h1>COMPRAS REGISTRADAS</h1>
@stop

@section('content')

    {{-- <h1 class=" flex justify-center text-4xl italic mb-8">TABLA DE REGISTROS DE CLIENTES</h1> --}}
    <a class="w-16 bg-blue-400 py-2 px-4 italic text-2xl" href="{{ route('compras.create') }}">Registrar
        Compra</a>

    <div class="container flex justify-center mt-4">
        <table class="bg-blue-400 border-8 border-double border-red-400">
            <thead>
                <tr>
                    <th class="border text-center px-8 py-2 italic text-2xl">ID</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">DNI</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">TIPO DE MONEDA</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">MONTO MONEDA</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">MONTO A PAGAR</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">ACCIONES</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($compras as $compra)
                    <tr>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $compra->id }}
                        </td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $compra->dni }}
                        </td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            {{ $compra->tipoMoneda }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            {{-- {{ $compra->montoComprar }}</td> --}}
                            @if ($compra->tipoMoneda == 'dolar')
                                <h6> $ {{$compra->montoComprar}} </h6>
                                @elseif ($compra->tipoMoneda == 'euro')
                                <h6> € {{$compra->montoComprar}} </h6>
                            @endif

                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            @if ($compra->tipoMoneda == 'dolar')
                                <h6> S/. {{ $compra->montoComprar * 3.9 }} </h6>
                            @elseif ($compra->tipoMoneda == 'euro')
                                <h6> S/.  {{ $compra->montoComprar * 4 }}</h6>
                            @endif
                        </td>

                        <td class="border text-center px-4 py-2 italic text-base">
                            <a href="{{ route('compras.edit', $compra) }}" class="bg-red-400 p-2">Editar</a>
                            <form action="{{ route('compras.destroy', $compra) }}" method="post">
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
