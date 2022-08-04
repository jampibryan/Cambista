@extends('adminlte::page')

@section('title', 'Sistema_Cambista')

@section('content_header')
    <h1>CLIENTES REGISTRADOS</h1>
@stop

@section('content')

    {{-- <h1 class=" flex justify-center text-4xl italic mb-8">TABLA DE REGISTROS DE CLIENTES</h1> --}}
    <a class="w-16 bg-blue-400 py-2 px-4 italic text-2xl" href="{{ route('clientes.create') }}">Registrar
        Cliente</a>

    <div class="container flex justify-center mt-4">
        <table class="bg-blue-400 border-8 border-double border-red-400">
            <thead>
                <tr>
                    <th class="border text-center px-8 py-2 italic text-2xl">Id</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">DNI</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">NOMBRE</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">CELULAR</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">ACCIONES</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->id }}
                        </td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->dni }}
                        </td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            {{ $cliente->nombres }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            {{ $cliente->celular }}</td>

                        <td class="border text-center px-4 py-2 italic text-base">
                            <a href="{{ route('clientes.edit', $cliente) }}" class="bg-red-400 p-2">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente) }}" method="post">
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
