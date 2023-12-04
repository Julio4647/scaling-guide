<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-md shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Iniciar Sesión</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico:</label>
                        <input id="email" type="email" class="border border-gray-300 p-2 w-full" name="email" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
                        <input id="password" type="password" class="border border-gray-300 p-2 w-full" name="password" required>
                    </div>

                    <div class="mb-4">
                        <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="text-sm" for="remember">
                            Recordarme
                        </label>
                    </div>

                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                            Iniciar Sesión
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-gray-500 ml-auto hover:underline" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                    </div>
                    <div class="flex items-center">
                        <a class="underline text-sm text-purple-900 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-center" href="{{ route('register') }}">
                            {{ __('Registrate') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
