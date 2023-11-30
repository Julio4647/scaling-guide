<!-- resources/views/agencias/index.blade.php -->

@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Lista de Agencias</h1>

        <a href="{{ route('agencias.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Crear Nueva Agencia</a>
        <a href="{{ route('login') }}" class="bg-purple-500 text-white py-2 px-4 rounded mb-4">Iniciar Seción</a>

        <table class="min-w-full bg-white border border-gray-300" style="margin-top: 20px">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nombre de Agencia</th>
                    <th class="py-2 px-4 border-b">Codigo de Agencia</th>
                    <th class="py-2 px-4 border-b">Tipo de Agencia</th>
                    <th class="py-2 px-4 border-b">Ciudad</th>
                    <th class="py-2 px-4 border-b">Estado</th>
                    <th class="py-2 px-4 border-b">País</th>
                    <!-- Agregar más encabezados según tus campos -->
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agencias as $agencia)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $agencia->nombre_agencia }}</td>
                        <td class="py-2 px-4 border-b">{{ $agencia->codigo_agencia }}</td>
                        <td class="py-2 px-4 border-b">{{ $agencia->tipo_agencia }}</td>
                        <td class="py-2 px-4 border-b">{{ $agencia->ciudad }}</td>
                        <td class="py-2 px-4 border-b">{{ $agencia->estado }}</td>
                        <td class="py-2 px-4 border-b">{{ $agencia->pais }}</td>
                        <!-- Agregar más columnas según tus campos -->
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('agencias.edit', $agencia->id) }}" class="text-blue-500">Editar</a>
                            <form action="{{ route('agencias.destroy', $agencia->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
