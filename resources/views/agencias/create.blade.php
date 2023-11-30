<!-- resources/views/agencias/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Crear Nueva Agencia</h1>

        <form action="{{ route('agencias.store') }}" method="POST" class="w-full max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="nombre_agencia" class="block text-gray-700 text-sm font-bold mb-2">Nombre de Agencia:</label>
                <input type="text" name="nombre_agencia" required class="border border-gray-300 p-2 w-full">
            </div>

            <!-- Agrega otros campos aquí -->

            <div class="flex items-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Guardar</button>
            </div>
        </form>
    </div>
@endsection
