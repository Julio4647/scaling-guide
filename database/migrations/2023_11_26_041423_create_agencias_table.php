<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_agencia');
            $table->string('codigo_agencia');
            $table->string('tipo_agencia');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('nombre_cliente');
            $table->string('email');
            $table->string('agency');
            $table->string('fecha_compra');
            $table->string('modalidad');
            $table->string('monto_pago');
            $table->string('tipo_pago');
            $table->string('moneda');
            $table->string('pais');
            $table->string('vendedor');
            $table->string('porcentaje_descuento');
            $table->string('status');
            // ... otros campos ...
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencias');
    }
}
