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
                    <select name="tipo_agencia" required class="border border-gray-300 p-2 w-full">
                        <option value="{{ $agencia->tipo_agencia}}">{{ $agencia->tipo_agencia}}</option>
                        <option value="emprendedor">Emprendedor</option>
                        <option value="startup">StartUp</option>
                        <option value="completa">Completa</option>
                    </select>
                </div>

                <div>
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                    <select name="status" required class="border border-gray-300 p-2 w-full">
                        <option value="activa" {{ $agencia->status == 'activa' ? 'selected' : '' }}>Activa</option>
                        <option value="inactiva" {{ $agencia->status == 'inactiva' ? 'selected' : '' }}>Inactiva</option>
                        <option value="pendiente" {{ $agencia->status == 'pendiente' ? 'selected' : '' }}>Pendiente de Pago</option>
                        <option value="cancelado" {{ $agencia->status == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                    </select>
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
                    <select name="pais" required class="border border-gray-300 p-2 w-full">
                        <option value="us">Estados Unidos</option>
                        <option value="mexico">México</option>
                        <option value="guatemala">Guatemala</option>
                        <option value="belice">Belice</option>
                        <option value="el Salvador">El Salvador</option>
                        <option value="nicaragua">Nicaragua</option>
                        <option value="honduras">Honduras</option>
                        <option value="panama">Panamá</option>
                        <option value="costa Rica">Costa Rica</option>
                        <option value="colombia">Colombia</option>
                        <option value="ecuador">Ecuador</option>
                        <option value="bolivia">Bolivia</option>
                        <option value="peru">Perú</option>
                        <option value="paraguay">Paraguay</option>
                        <option value="chile">Chile</option>
                        <option value="argentina">Argentina</option>
                        <option value="uruguay">Uruguay</option>
                        <option value="venezuela">Venezuela</option>
                        <option value="republica Dominicana">República Dominicana</option>
                        <option value="puerto Rico">Puerto Rico</option>
                        <option value="españa">España</option>
                    </select>
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
                    <select name="agency" required class="border border-gray-300 p-2 w-full">
                        <option value="{{ $agencia->agency}}">{{ $agencia->agency}}</option>
                        <option value="maryel">Maryel</option>
                        <option value="esme">Esme</option>
                        <option value="leo">Leo</option>
                        <option value="quique">Quique</option>
                        <option value="jess">Jess</option>
                    </select>
                </div>

                <div>
                    <label for="fecha_compra" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Compra:</label>
                    <input type="date" name="fecha_compra" value="{{ $agencia->fecha_compra }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="moneda" class="block text-gray-700 text-sm font-bold mb-2">Modalidad:</label>
                    <select name="moneda" required class="border border-gray-300 p-2 w-full">
                        <option value="{{$agencia->moneda}}">{{$agencia->moneda}}</option>
                        <option value="usd">USD</option>
                        <option value="mxn">MXN</option>
                        <option value="clp">CLP</option>
                        <option value="sol">SOL</option>
                        <option value="eur">EUR</option>
                    </select>
                </div>

                <div>
                    <label for="modalidad" class="block text-gray-700 text-sm font-bold mb-2">Modalidad:</label>
                    <select name="modalidad" required class="border border-gray-300 p-2 w-full">
                        <option value="{{$agencia->modalidad}}">{{$agencia->modalidad}}</option>
                        <option value="Mensual">Mensual</option>
                        <option value="Anual">Anual</option>
                        <option value="Lifetime">Lifetime</option>
                    </select>
                </div>

                <div>
                    <label for="monto_pago" class="block text-gray-700 text-sm font-bold mb-2">Monto de Pago:</label>
                    <input type="number" name="monto_pago" value="{{ $agencia->monto_pago }}" required class="border border-gray-300 p-2 w-full">
                </div>

                <div>
                    <label for="tipo_pago" class="block text-gray-700 text-sm font-bold mb-2">Tipo de Pago:</label>
                    <select name="tipo_pago" required class="border border-gray-300 p-2 w-full">
                        <option value="{{$agencia->tipo_pago}}">{{$agencia->tipo_pago}}</option>
                        <option value="deposito">Deposito</option>
                        <option value="stripe">Stripe</option>
                        <option value="mercadopago">MercadoPago</option>
                        <option value="paypal">PayPal</option>
                    </select>
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
