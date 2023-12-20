<!-- resources/views/agencias/index.blade.php -->

@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Lista de Agencias</h1>

        @php
            $total = $agencias->count();
        @endphp

        <div class="mb-6 grid grid-cols-2 gap-4">
            <div>
                @role('admin')
                    <a href="{{ route('agencias.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Crear Nueva
                        Agencia</a>
                    @elserole('community')
                    <a href="{{ route('agencias.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Crear Nueva
                        Agencia</a>
                @endrole
            </div>
            <div>

            </div>
            <div>


            </div>
            <div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <div class="px-4 py-2">
                        <div class="font-bold text-xl mb-2 text-center">Total Agencias</div>
                        <p class="text-gray-700 text-base text-center">
                            {{ $total }}
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <div class="mb-4" style="margin-top: 20px">
            <label for="search" class="sr-only">Buscar:</label>
            <input type="text" id="search" placeholder="Buscar por nombre o código"
                class="p-2 border border-gray-300 rounded">
        </div>
        <div class="overflow-x-auto">
            <table id="miTabla" class="min-w-full bg-white border border-gray-300" style="margin-top: 20px">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-8 border-b">Nombre de Agencia</th>
                        <th class="py-2 px-8 border-b">Codigo de Agencia</th>
                        <th class="py-2 px-8 border-b">
                            <button id="tipoAgenciaFilterBtn" type="button"
                                class="bg-white-500 text-black py-2 px-4 rounded">
                                Tipo de Agencia
                            </button>
                            <div id="tipoAgenciaDropdown"
                                class="hidden absolute z-50 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="tipo-agencia-checkbox" data-filter="emprendedor">
                                    Emprendedor
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="tipo-agencia-checkbox" data-filter="startup"> Startup
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="tipo-agencia-checkbox" data-filter="completa"> Completa
                                </label>
                            </div>



                        </th>
                        <th class="py-2 px-12 border-b">
                            <button id="statusFilterBtn" type="button" class="bg-white-500 text-black py-2 px-4 rounded">
                                Status
                            </button>
                            <div id="statusDropdown"
                                class="hidden absolute z-50 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
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
                        </th>
                        <th class="py-2 px-8 border-b">Ciudad</th>
                        <th class="py-2 px-8 border-b">Estado</th>
                        <th class="py-2 px-8 border-b">
                            <div>
                                <button id="paisFilterBtn" type="button" class="bg-white-500 text-black py-2 px-4 rounded">
                                    País
                                </button>
                                <div id="paisDropdown"
                                    class="hidden absolute right-0 ml-[-150%] z-50 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="us"> US
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="mexico"> México
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="guatemala"> Guatemala
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="belice"> Belice
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="el Salvador"> El Salvador
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="nicaragua"> Nicaragua
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="honduras"> Honduras
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="panamá"> Panamá
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="costa Rica"> Costa Rica
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="colombia"> Colombia
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="ecuador"> Ecuador
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="bolivia"> Bolivia
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="perú"> Perú
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="paraguay"> Paraguay
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="chile"> Chile
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="argentina"> Argentina
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="uruguay"> Uruguay
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="venezuela"> Venezuela
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="república Dominicana">
                                        República Dominicana
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="puerto Rico"> Puerto
                                        Rico
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="pais-checkbox" data-filter="españa"> España
                                    </label>
                                </div>

                                <!-- ... (otras secciones del HTML) ... -->
                            </div>

                        </th>
                        <th class="py-2 px-8 border-b">Nombre Cliente</th>
                        <th class="py-2 px-8 border-b">Email</th>
                        <th class="py-2 px-8 border-b">
                            <button id="agencyFilterBtn" type="button"
                                class="bg-white-500 text-black py-2 px-4 rounded">
                                Agency
                            </button>
                            <div id="agencyDropdown"
                                class="hidden absolute z-50 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="agency-checkbox" data-filter="maryel"> Maryel
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="agency-checkbox" data-filter="esme"> Esme
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="agency-checkbox" data-filter="leo"> Leo
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="agency-checkbox" data-filter="quique"> Quique
                                </label>
                            </div>
                        </th>
                        <th class="py-2 px-8 border-b">Fecha de Compra</th>
                        <th class="py-2 px-8 border-b">
                            <!-- Botón de filtro -->
                            <button id="monedaFilterBtn" type="button"
                                class="bg-white-500 text-black py-2 px-4 rounded">
                                Moneda
                            </button>

                            <!-- Menú desplegable -->
                            <div id="monedaDropdown"
                                class="hidden absolute right-0 ml-[-150%] z-50 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="moneda-checkbox" data-filter="USD"> USD
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="moneda-checkbox" data-filter="MXN"> MXN
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="moneda-checkbox" data-filter="CLP"> CLP
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="moneda-checkbox" data-filter="COP"> COP
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="moneda-checkbox" data-filter="SOL"> SOL
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="moneda-checkbox" data-filter="EUR"> EUR
                                </label>
                            </div>

                        </th>
                        <th class="py-2 px-8 border-b">
                            <button id="modalidadFilterBtn" type="button"
                                class="bg-white-500 text-black py-2 px-4 rounded">
                                Modalidad
                            </button>
                            <div id="modalidadDropdown"
                                class="hidden absolute right-0 ml-[-150%] z-50 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="modalidad-checkbox" data-filter="mensual"> Mensual
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="modalidad-checkbox" data-filter="anual"> Anual
                                </label>
                                <label class="block w-full py-2 px-4 text-sm">
                                    <input type="checkbox" class="modalidad-checkbox" data-filter="lifetime"> Lifetime
                                </label>
                            </div>
                        </th>
                        <th class="py-2 px-8 border-b">Monto de Pago</th>
                        <th class="py-2 px-8 border-b">
                            <div>
                                <button id="tipoPagoFilterBtn" type="button"
                                    class="bg-white-500 text-black py-2 px-4 rounded">
                                    Tipo de Pago
                                </button>
                                <div id="tipoPagoDropdown"
                                    class="hidden absolute right-0 ml-[-150%] z-50 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="tipo-pago-checkbox" data-filter="deposito">
                                        Depósito
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="tipo-pago-checkbox" data-filter="stripe"> Stripe
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="tipo-pago-checkbox" data-filter="mercadopago">
                                        MercadoPago
                                    </label>
                                    <label class="block w-full py-2 px-4 text-sm">
                                        <input type="checkbox" class="tipo-pago-checkbox" data-filter="paypal"> PayPal
                                    </label>
                                </div>

                            </div>

                        </th>
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
                            <td class="py-2 px-8 border-b" data-column="tipo_agencia">{{ $agencia->tipo_agencia }}</td>
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
                            <td class="py-2 px-8 border-b" data-column="pais">{{ $agencia->pais }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->nombre_cliente }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->email }}</td>
                            <td class="py-2 px-8 border-b" data-column="agency">{{ $agencia->agency }}</td>
                            <td class="py-2 px-4 border-b">{{ $agencia->fecha_compra }}</td>
                            <td class="py-2 px-8 border-b" data-column="moneda">{{ $agencia->moneda }}</td>
                            <td class="py-2 px-8 border-b" data-column="modalidad">{{ $agencia->modalidad }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->monto_pago }}</td>
                            <td class="py-2 px-8 border-b" data-column="tipo_pago">{{ $agencia->tipo_pago }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->vendedor }}</td>
                            <td class="py-2 px-8 border-b">{{ $agencia->porcentaje_descuento }} %</td>

                            <!-- Agregar más columnas según tus campos -->
                            @role('admin')
                                <td class="py-2 px-8 border-b">
                                    <a href="{{ route('agencias.edit', $agencia->id) }}" class="text-blue-500">Editar</a>
                                    <form action="{{ route('agencias.destroy', $agencia->id) }}" method="POST"
                                        class="inline">
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
        <div class="overflow-x-auto" style="margin-top: 20px">
            <h1 class="text-2xl font-bold mb-4">Agencys</h1>
            <table class="min-w-full bg-white border border-gray-300 second-table" style="margin-top: 20px">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-8 border-b">Agency</th>
                        <th class="py-2 px-8 border-b">Total Clientes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($conteoPorAgencia as $agencia)
                        <tr>
                            <td class="py-2 px-8 border-b text-center">{{ $agencia->agency }}</td>
                            <td class="py-2 px-8 border-b text-center">{{ $agencia->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Función para manejar el clic en el botón de filtro de estado
            $('#statusFilterBtn').on('click', function() {
                $('#statusDropdown').toggleClass('hidden');
            });

            // Función para manejar el cambio en los checkboxes de filtro de estado
            $('.status-checkbox').on('change', function() {
                filterTableRows();
            });

            // Función para manejar el clic en el botón de filtro de tipo de agencia
            $('#tipoAgenciaFilterBtn').on('click', function() {
                $('#tipoAgenciaDropdown').toggleClass('hidden');
            });

            // Función para manejar el cambio en los checkboxes de filtro de tipo de agencia
            $('.tipo-agencia-checkbox').on('change', function() {
                filterTableRows();
            });

            // Función para manejar el clic en el botón de filtro de Agency
            $('#agencyFilterBtn').on('click', function() {
                $('#agencyDropdown').toggleClass('hidden');
            });

            // Función para manejar el cambio en los checkboxes de filtro de Agency
            $('.agency-checkbox').on('change', function() {
                filterTableRows();
            });

            // Función para manejar el clic en el botón de filtro de Modalidad
            $('#modalidadFilterBtn').on('click', function() {
                $('#modalidadDropdown').toggleClass('hidden');
            });

            // Función para manejar el cambio en los checkboxes de filtro de Modalidad
            $('.modalidad-checkbox').on('change', function() {
                filterTableRows();
            });

            // Función para manejar el clic en el botón de filtro de Moneda
            $('#monedaFilterBtn').on('click', function() {
                $('#monedaDropdown').toggleClass('hidden');
            });

            // Función para manejar el cambio en los checkboxes de filtro de Moneda
            $('.moneda-checkbox').on('change', function() {
                filterTableRows();
            });

            // Función para manejar la búsqueda en tiempo real
            $('#search').on('keyup', function() {
                filterTableRows();
            });
            // Función para manejar el clic en el botón de filtro de Tipo de Pago
            $('#tipoPagoFilterBtn').on('click', function() {
                $('#tipoPagoDropdown').toggleClass('hidden');
            });

            // Función para manejar el cambio en los checkboxes de filtro de Tipo de Pago
            $('.tipo-pago-checkbox').on('change', function() {
                filterTableRows();
            });

            // Función para manejar el clic en el botón de filtro de País
            $('#paisFilterBtn').on('click', function() {
                $('#paisDropdown').toggleClass('hidden');
            });

            // Función para manejar el cambio en los checkboxes de filtro de País
            $('.pais-checkbox').on('change', function() {
                filterTableRows();
            });

            // ... (código existente)

            // Función para manejar el cambio en los checkboxes de filtro
            function filterTableRows() {
                console.log('Filtering...');

                // Obtener los estados seleccionados
                var selectedStatuses = $('.status-checkbox:checked').map(function() {
                    return $(this).data('filter');
                }).get();

                // Obtener los tipos de agencia seleccionados
                var selectedTipoAgencias = $('.tipo-agencia-checkbox:checked').map(function() {
                    return $(this).data('filter');
                }).get();

                // Obtener las agencias seleccionadas
                var selectedAgencies = $('.agency-checkbox:checked').map(function() {
                    return $(this).data('filter');
                }).get();

                // Obtener las modalidades seleccionadas
                var selectedModalidades = $('.modalidad-checkbox:checked').map(function() {
                    return $(this).data('filter');
                }).get();

                // Obtener las monedas seleccionadas
                var selectedMonedas = $('.moneda-checkbox:checked').map(function() {
                    return $(this).data('filter');
                }).get();

                // Obtener los tipos de pago seleccionados
                var selectedTiposPago = $('.tipo-pago-checkbox:checked').map(function() {
                    return $(this).data('filter');
                }).get();

                // Obtener los países seleccionados
                var selectedPaises = $('.pais-checkbox:checked').map(function() {
                    return $(this).data('filter');
                }).get();

                console.log('Selected Statuses:', selectedStatuses);
                console.log('Selected Tipo Agencias:', selectedTipoAgencias);
                console.log('Selected Agencies:', selectedAgencies);
                console.log('Selected Modalidades:', selectedModalidades);
                console.log('Selected Monedas:', selectedMonedas);
                console.log('Selected Tipos Pago:', selectedTiposPago);
                console.log('Selected Paises:', selectedPaises);

                // Filtrar las filas de la primera tabla según los estados, tipos de agencia, agencias, modalidades, monedas, tipos de pago y países seleccionados
                $('table:not(.second-table) tbody tr').hide().filter(function() {
                    var status = $(this).find('[data-status]').data('status');
                    var tipoAgencia = $(this).find('[data-column="tipo_agencia"]').text().toLowerCase();
                    var agency = $(this).find('[data-column="agency"]').text().toLowerCase();
                    var modalidad = $(this).find('[data-column="modalidad"]').text().toLowerCase();
                    var moneda = $(this).find('[data-column="moneda"]').text().toUpperCase();
                    var tipoPago = $(this).find('[data-column="tipo_pago"]').text().toLowerCase();
                    var pais = $(this).find('[data-column="pais"]').text().trim();

                    console.log('Row Status:', status);
                    console.log('Row Tipo Agencia:', tipoAgencia);
                    console.log('Row Agency:', agency);
                    console.log('Row Modalidad:', modalidad);
                    console.log('Row Moneda:', moneda);
                    console.log('Row Tipo Pago:', tipoPago);
                    console.log('Row Pais:', pais);

                    return (selectedStatuses.length === 0 || selectedStatuses.includes(status)) &&
                        (selectedTipoAgencias.length === 0 || selectedTipoAgencias.includes(tipoAgencia)) &&
                        (selectedAgencies.length === 0 || selectedAgencies.includes(agency)) &&
                        (selectedModalidades.length === 0 || selectedModalidades.includes(modalidad)) &&
                        (selectedMonedas.length === 0 || selectedMonedas.includes(moneda)) &&
                        (selectedTiposPago.length === 0 || selectedTiposPago.includes(tipoPago)) &&
                        (selectedPaises.length === 0 || selectedPaises.includes(pais)) &&
                        ($(this).text().toLowerCase().indexOf($('#search').val().toLowerCase()) > -1);
                }).show();


                // Contar y mostrar opciones seleccionadas para cada filtro
                var countStatus = contarOpcionesSeleccionadas('.status-checkbox');
                var countTipoAgencia = contarOpcionesSeleccionadas('.tipo-agencia-checkbox');
                var countAgency = contarOpcionesSeleccionadas('.agency-checkbox');
                var countModalidad = contarOpcionesSeleccionadas('.modalidad-checkbox');
                var countPais = contarOpcionesSeleccionadas('.pais-checkbox');

                $('#countStatus').text(countStatus);
                $('#countTipoAgencia').text(countTipoAgencia);
                $('#countAgency').text(countAgency);
                $('#countModalidad').text(countModalidad);
                $('#countPais').text(countPais);
            }


        });
    </script>








    <!-- ... (tu código existente) ... -->
@endsection
