<!-- resources/views/agencias/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Editar Agencia</h1>

        <form action="{{ route('agencias.update', $agencia->id) }}" method="POST" class="container mx-auto mt-8">
            @csrf
            @method('PUT')

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="nombre_agencia" class="block text-gray-700 text-sm font-bold mb-2">Nombre de Agencia:</label>
                    <input type="text" name="nombre_agencia" value="{{ $agencia->nombre_agencia }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="codigo_agencia" class="block text-gray-700 text-sm font-bold mb-2">Codigo de Agencia:</label>
                    <input type="text" name="codigo_agencia" value="{{ $agencia->codigo_agencia }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="tipo_agencia" class="block text-gray-700 text-sm font-bold mb-2">Tipo de Agencia:</label>
                    <input type="text" name="tipo_agencia" value="{{ $agencia->tipo_agencia }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="ciudad" class="block text-gray-700 text-sm font-bold mb-2">Ciudad:</label>
                    <input type="text" name="ciudad" value="{{ $agencia->ciudad }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                    <input type="text" name="estado" value="{{ $agencia->estado }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="pais" class="block text-gray-700 text-sm font-bold mb-2">País:</label>
                    <input type="text" name="pais" value="{{ $agencia->pais }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="nombre_cliente" class="block text-gray-700 text-sm font-bold mb-2">Nombre Cliente:</label>
                    <input type="text" name="nombre_cliente" value="{{ $agencia->nombre_cliente }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" value="{{ $agencia->email }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="agency" class="block text-gray-700 text-sm font-bold mb-2">Agency:</label>
                    <input type="text" name="agency" value="{{ $agencia->agency }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="fecha_compra" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Compra:</label>
                    <input type="date" name="fecha_compra" value="{{ $agencia->fecha_compra }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="modalidad" class="block text-gray-700 text-sm font-bold mb-2">Modalidad:</label>
                    <input type="text" name="modalidad" value="{{ $agencia->modalidad }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="monto_pago" class="block text-gray-700 text-sm font-bold mb-2">Monto de Pago:</label>
                    <input type="number" name="monto_pago" value="{{ $agencia->monto_pago }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="tipo_pago" class="block text-gray-700 text-sm font-bold mb-2">Tipo de Pago:</label>
                    <input type="text" name="tipo_pago" value="{{ $agencia->tipo_pago }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="vendedor" class="block text-gray-700 text-sm font-bold mb-2">Vendedor:</label>
                    <input type="text" name="vendedor" value="{{ $agencia->vendedor }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="porcentaje_descuento" class="block text-gray-700 text-sm font-bold mb-2">Porcentaje de Descuento:</label>
                    <input type="number" name="porcentaje_descuento" value="{{ $agencia->porcentaje_descuento }}" required class="border border-gray-300 p-2 w-full">
                </div>
            </div>

            <div class="flex items-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
