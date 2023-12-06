<!-- resources/views/agencias/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Crear Nueva Agencia</h1>

        <form action="{{ route('agencias.store') }}" method="POST" class="container mx-auto mt-8">
            @csrf
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="nombre_agencia" class="block text-gray-700 text-sm font-bold mb-2">Nombre de Agencia:</label>
                    <input type="text" name="nombre_agencia" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="codigo_agencia" class="block text-gray-700 text-sm font-bold mb-2">Codigo de Agencia:</label>
                    <input type="text" name="codigo_agencia" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="tipo_agencia" class="block text-gray-700 text-sm font-bold mb-2">Tipo de Agencia:</label>
                    <input type="text" name="tipo_agencia" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="ciudad" class="block text-gray-700 text-sm font-bold mb-2">Ciudad:</label>
                    <input type="text" name="ciudad" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                    <input type="text" name="estado" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="pais" class="block text-gray-700 text-sm font-bold mb-2">País:</label>
                    <input type="text" name="pais" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="nombre_cliente" class="block text-gray-700 text-sm font-bold mb-2">Nombre Cliente:</label>
                    <input type="text" name="nombre_cliente" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="agency" class="block text-gray-700 text-sm font-bold mb-2">Agency:</label>
                    <input type="text" name="agency" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="fecha_compra" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Compra:</label>
                    <input type="date" name="fecha_compra" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="modalidad" class="block text-gray-700 text-sm font-bold mb-2">Modalidad:</label>
                    <input type="text" name="modalidad" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="monto_pago" class="block text-gray-700 text-sm font-bold mb-2">Monto de Pago:</label>
                    <input type="number" name="monto_pago" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="tipo_pago" class="block text-gray-700 text-sm font-bold mb-2">Tipo de Pago:</label>
                    <input type="text" name="tipo_pago" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="vendedor" class="block text-gray-700 text-sm font-bold mb-2">Vendedor:</label>
                    <input type="text" name="vendedor" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="porcentaje_descuento" class="block text-gray-700 text-sm font-bold mb-2">Porcentaje de Descuento:</label>
                    <input type="number" name="porcentaje_descuento" required class="border border-gray-300 p-2 w-full">
                </div>
            </div>

            <div class="flex items-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Guardar</button>
            </div>
        </form>
    </div>
@endsection
