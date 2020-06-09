<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casas', function (Blueprint $table) {
            $table->bigIncrements('idCasa');
            $table->integer('noExteriorCasa');
            $table->integer('noInteriorCasa');
            $table->integer('totalPersonasCasa');
            $table->integer('totalMascotasCasa');
            $table->string('nombreContactoPrincipalCasa');
            $table->integer('numeroContactoPrincipalCasa');
            $table->unsignedBigInteger('fkCondominioCasa');
            $table->timestamps();
            $table->enum('statusCasa', ['Activo', 'Inactivo'])->default('Activo');
            $table->foreign('fkCondominioCasa')->references('idCondominio')->on('condominios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casas');
    }
}
