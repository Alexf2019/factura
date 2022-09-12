<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabeceraElectronicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabecera_electronica', function (Blueprint $table) {
            $table->increments('idcabecera');
            $table->string('Ruc'); 
            $table->string('Razon_social');
            $table->string('Nombre_comercial');
            $table->string('Direccion_matriz');
            $table->string('Direccion_emisor');
            $table->integer('Codigo_establecimiento_emisor');
            $table->integer('Codigo_punto_emision');
            $table->integer('Contribuyente_especial');
            $table->boolean('Obligado_contabilidad');
            $table->string('Logo_emisor');
            $table->integer('Tipo_ambiente');
            $table->integer('Tipo_emision');
           
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
        Schema::dropIfExists('cabecera_electronica');
    }
}
