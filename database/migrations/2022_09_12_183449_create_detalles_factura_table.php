<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_factura', function (Blueprint $table) {
            $table->increments('id');
            $table->string('impuestos_tarifas');
            $table->string('codigo_producto');
            $table->string('codigo_aux_producto');
            $table->string('nombre_producto');
            $table->string('valor_unitario');
            $table->string('descuento');
            $table->string('impuesto');
            $table->string('tarifa_impuesto');
            $table->string('campos_adicionales');

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
        Schema::dropIfExists('detalles_factura');
    }
}
