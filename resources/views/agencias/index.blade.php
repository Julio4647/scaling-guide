<!-- resources/views/agencias/index.blade.php -->

@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Lista de Agencias</h1>
        @role('admin')
            <a href="{{ route('agencias.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Crear Nueva Agencia</a>
        @else
        <a href="{{ route('agencias.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Crear Nueva Agencia</a>
        @endrole
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300" style="margin-top: 20px">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-8 border-b">Nombre de Agencia</th>
                        <th class="py-2 px-8 border-b">Codigo de Agencia</th>
                        <th class="py-2 px-8 border-b">Tipo de Agencia</th>
                        <th class="py-2 px-8 border-b">Ciudad</th>
                        <th class="py-2 px-8 border-b">Estado</th>
                        <th class="py-2 px-8 border-b">País</th>
                        <th class="py-2 px-8 border-b">Nombre Cliente</th>
                        <th class="py-2 px-8 border-b">Email</th>
                        <th class="py-2 px-8 border-b">Agency</th>
                        <th class="py-2 px-8 border-b">Fecha de Compra</th>
                        <th class="py-2 px-8 border-b">Modalidad</th>
                        <th class="py-2 px-8 border-b">Monto de Pago</th>
                        <th class="py-2 px-8 border-b">Tipo de Pago</th>
                        <th class="py-2 px-8 border-b">Vendedor</th>
                        <th class="py-2 px-8 border-b">Porcentaje de Descuento</th>
                        <!-- Agregar más encabezados según tus campos -->
                        @role('admin')
                            <th class="py-2 px-8 border-b">Acciones</th>
                        @else
                            <th class="py-2 px-8 border-b">Acciones</th>
                        @endrole
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agencias as $agencia)
                        <tr>
                            <td class="py-2 px-8 border-b">{{ $agencia->nombre_agencia }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->codigo_agencia }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->tipo_agencia }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->ciudad }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->estado }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->pais }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->nombre_cliente }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->email }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->agency }}</td>
                            <td class="py-2 px-4 border-b">{{ $agencia->fecha_compra }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->modalidad }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->monto_pago }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->tipo_pago }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->vendedor }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->porcentaje_descuento }} %</td>

                            <!-- Agregar más columnas según tus campos -->
                            @role('admin')
                                <td class="py-2 px-8 border-b">
                                    <a href="{{ route('agencias.edit', $agencia->id) }}" class="text-blue-500">Editar</a>
                                    <form action="{{ route('agencias.destroy', $agencia->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 ml-2">Eliminar</button>
                                    </form>
                                </td>
                            @else
                                <td class="py-2 px-8 border-b">
                                    <a href="{{ route('agencias.edit', $agencia->id) }}" class="text-blue-500">Editar</a>

                                </td>
                            @endrole
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
