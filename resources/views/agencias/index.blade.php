<!-- resources/views/agencias/index.blade.php -->

@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Lista de Agencias</h1>
        @role('admin')
            <a href="{{ route('agencias.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Crear Nueva Agencia</a>
            @elserole('community')
            <a href="{{ route('agencias.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Crear Nueva Agencia</a>
        @endrole
        <div class="mb-4 py-4">
            <div class="relative inline-block text-left">
                <button id="statusFilterBtn" type="button" class="bg-red-500 text-white py-2 px-4 rounded">
                    Filtrar por Status
                </button>
                <div id="statusDropdown" class="hidden absolute z-50 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
                    <label class="block w-full py-2 px-4 text-sm">
                        <input type="checkbox" class="status-checkbox" data-filter="activa"> Activa
                    </label>
                    <label class="block w-full py-2 px-4 text-sm">
                        <input type="checkbox" class="status-checkbox" data-filter="inactiva"> Inactiva
                    </label>
                    <label class="block w-full py-2 px-4 text-sm">
                        <input type="checkbox" class="status-checkbox" data-filter="pendiente"> Pendiente
                    </label>
                    <label class="block w-full py-2 px-4 text-sm">
                        <input type="checkbox" class="status-checkbox" data-filter="cancelado"> Cancelado
                    </label>
                </div>
            </div>
        </div>


        <div class="mb-4" style="margin-top: 20px">
            <label for="search" class="sr-only">Buscar:</label>
            <input type="text" id="search" placeholder="Buscar por nombre o código"
                class="p-2 border border-gray-300 rounded">
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300" style="margin-top: 20px">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-8 border-b">Nombre de Agencia</th>
                        <th class="py-2 px-8 border-b">Codigo de Agencia</th>
                        <th class="py-2 px-8 border-b">Tipo de Agencia</th>
                        <th class="py-2 px-12 border-b">Status</th>
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
                            @elserole('community')
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
                            <td class="py-2 px-14 border-b" data-status="{{ strtolower($agencia->status) }}">
                                @if ($agencia->status == 'activa')
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Activo
                                @elseif ($agencia->status == 'inactiva')
                                    <div class="h-2.5 w-2.5 rounded-full bg-gray-400 mr-2"></div> Inactiva
                                @elseif ($agencia->status == 'pendiente')
                                    <div class="h-2.5 w-2.5 rounded-full bg-yellow-400 mr-2"></div> Pendiente
                                @elseif ($agencia->status == 'cancelado')
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-400 mr-2"></div> Cancelado
                                @endif
                            </td>

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
                                @elserole('community')
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Función para manejar el clic en el botón de filtro
            $('#statusFilterBtn').on('click', function () {
                $('#statusDropdown').toggleClass('hidden');
            });

            // Función para manejar el cambio en los checkboxes
            $('.status-checkbox').on('change', function () {
                // Obtener los estados seleccionados
                var selectedStatuses = $('.status-checkbox:checked').map(function () {
                    return $(this).data('filter');
                }).get();

                // Filtrar las filas de la tabla según los estados seleccionados
                if (selectedStatuses.length > 0) {
                    $('tbody tr').hide().filter(function () {
                        var status = $(this).find('[data-status]').data('status');
                        return selectedStatuses.includes(status);
                    }).show();
                } else {
                    // Mostrar todas las filas si no hay estados seleccionados
                    $('tbody tr').show();
                }
            });

            // Función para manejar la búsqueda en tiempo real
            $('#search').on('keyup', function () {
                var value = $(this).val().toLowerCase();
                $('tbody tr').filter(function () {
                    var rowText = $(this).text().toLowerCase();
                    var status = $(this).find('[data-status]').data('status');

                    // Mostrar la fila si el valor de búsqueda está presente en cualquier parte de la fila
                    // o si el valor de búsqueda coincide con el valor del atributo data-status
                    $(this).toggle(rowText.indexOf(value) > -1 || status.indexOf(value) > -1);
                });

                // Restaurar los checkboxes y ocultar el dropdown después de la búsqueda
                if (value === '') {
                    $('.status-checkbox').prop('checked', false);
                    $('#statusDropdown').addClass('hidden');
                }
            });
        });
    </script>




@endsection
