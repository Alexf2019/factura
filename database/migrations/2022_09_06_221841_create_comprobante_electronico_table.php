<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobanteElectronicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante_electronico', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('fecha_emision');
            //$table->integer('tipo_comprobante');
            $table->unsignedInteger('tipos_comprobantes_id');
            $table->string('numero_ruc');
            //$table->integer('tipo_ambiente');
            $table->unsignedInteger('tipo_ambiente_id');
            $table->integer('serie');
            $table->integer('numero_comprobante');
            $table->integer('codigo_numerico');
            //$table->integer('tipo_emision');
            $table->unsignedInteger('tipo_emision_id');
            $table->integer('digito_verificador');
            $table->integer('requisito');
            $table->string('estado');
          

            $table->foreign('tipos_comprobantes_id')
                ->references('id')
                ->on('tipos_comprobantes')
                ->onDelete('cascade');


            $table->foreign('tipo_ambiente_id')
                ->references('id')
                ->on('tipo_ambiente')
                ->onDelete('cascade');     

            
             $table->foreign('tipo_emision_id')
                ->references('id')
                ->on('tipo_emision')
                ->onDelete('cascade');       
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
        Schema::dropIfExists('comprobante_electronico');
    }
}
