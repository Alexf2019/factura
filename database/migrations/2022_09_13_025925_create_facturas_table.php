<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            //$table->date('FECHAEMISION')->nullable()->default(null);

            $table->float('subtotaliva',8,2)->nullable()->default(null);
            $table->float('subtotalcero',8,2)->nullable()->default(null);
            $table->float('subotalsiniva',8,2)->nullable()->default(null);
            $table->float('subtotalexcentoiva',8,2)->nullable()->default(null);
            $table->float('subtotal',8,2)->nullable()->default(null);
            $table->float('total_descuento',8,2)->nullable()->default(null);
            $table->float('valorice',8,2)->nullable()->default(null);
            $table->float('valorirbpnr',8,2)->nullable()->default(null);
            $table->float('valoriva',8,2)->nullable()->default(null);
            $table->float('propina',8,2)->nullable()->default(null);
            $table->float('valortotal',8,2)->nullable()->default(null);

            $table->string('estado')->nullable()->default(null);

            $table->integer('detalles_factura_id')->unsigned();
            $table->foreign('detalles_factura_id')->references('id')->on('detalles_factura');


            $table->integer('comprobante_electronico_id')->unsigned();
            $table->foreign('comprobante_electronico_id')->references('id')->on('comprobante_electronico');

            $table->integer('cabecera_electronica_id')->unsigned();
            $table->foreign('cabecera_electronica_id')->references('id')->on('cabecera_electronica');

            $table->integer('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes');

            $table->integer('tipo_identificacion_id')->unsigned();
            $table->foreign('tipo_identificacion_id')->references('id')->on('tipo_identificacion');

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
        Schema::dropIfExists('facturas');
    }
}
