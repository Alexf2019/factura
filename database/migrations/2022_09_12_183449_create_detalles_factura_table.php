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

            $table->float('cantidad');
            $table->float('impuestos_tarifas');
            $table->string('codigo_producto');
            $table->string('codigo_aux_producto')->nullable()->default(null);;
            $table->string('nombre_producto');
            $table->float('valor_unitario');
            $table->float('descuento');
            $table->float('impuesto');
            $table->float('tarifa_impuesto');
            //$table->string('campos_adicionales');

            $table->float('total');

            $table->string('estado');

            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');


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
