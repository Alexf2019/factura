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
            $table->increments('id');
            //$table->string('Ruc'); 
            //$table->string('Razon_social');
            //$table->string('Nombre_comercial');
            //$table->string('Direccion_matriz');
            //$table->string('Direccion_emisor');
            //$table->string('Codigo_establecimiento_emisor')->nullable()->default(null);
            $table->string('Codigo_punto_emision')->nullable()->default(null);
            $table->string('Contribuyente_especial');
            $table->boolean('Obligado_contabilidad');
            $table->string('Logo_emisor');

            $table->string('estado')->nullable()->default(null);

            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');

            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');


            $table->timestamps();
            $table->softDeletes();
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
