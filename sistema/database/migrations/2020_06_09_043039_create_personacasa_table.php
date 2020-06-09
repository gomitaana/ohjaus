<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonacasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personacasa', function (Blueprint $table) {
            $table->bigIncrements('idPersonacasa');
            $table->unsignedBigInteger('fkPersonaPersonacasa');
            $table->unsignedBigInteger('fkCasaPersonacasa');
            $table->enum('tipoPersonacasa',['Dueño','ResidenteRenta','ResidenteFamiliar']);
            $table->timestamps();
            $table->enum('statusPersonaCasa',['Activo','Inactivo'])->default('Activo');
            $table->foreign('fkPersonaPersonacasa')->references('idPersona')->on('persona');
            $table->foreign('fkCasaPersonacasa')->references('idCasa')->on('casas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personacasa');
    }
}
