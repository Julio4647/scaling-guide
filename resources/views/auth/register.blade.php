<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-6">Registrar Nuevo Usuario</h2>

        <form method="POST" action="{{ route('register.create') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input id="name" type="text" class="border border-gray-300 p-2 w-full" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico:</label>
                <input id="email" type="email" class="border border-gray-300 p-2 w-full" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
                <input id="password" type="password" class="border border-gray-300 p-2 w-full" name="password" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirmar Contraseña:</label>
                <input id="password_confirmation" type="password" class="border border-gray-300 p-2 w-full" name="password_confirmation" required>
            </div>

            <div class="mb-4">
                <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Tipo de Usuario:</label>
                <select name="role" id="role" required>
                    <option value="admin">Admin</option>
                    <option value="community">Community</option>
                </select>
            </div>

            <div class="flex items-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Registrar
                </button>
            </div>
        </form>
    </div>
@endsection
