<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('link')->nullable()->default(null);
            $table->string('ruc')->nullable()->default(null);
            $table->string('nombre_comercial');
            $table->string('actividad_economica');
            $table->string('razon_social');
            $table->string('pagina_web')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->text('descripcion')->nullable()->default(null);
            $table->string('direccion_matriz');
            $table->text('direccion')->nullable()->default(null);
            $table->string('telefono_oficina',10)->nullable()->default(null);
            $table->string('telefono_particular',10)->nullable()->default(null);
            $table->string('telefono_celular',10)->nullable()->default(null);

            $table->integer('nacionalidad_id')->nullable()->default(null);
            $table->integer('provincia_id')->nullable()->default(null);
            $table->string('ciudad')->nullable()->default(null);
            
            $table->string('estado')->nullable()->default(null);

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
        Schema::dropIfExists('empresas');
    }
}
