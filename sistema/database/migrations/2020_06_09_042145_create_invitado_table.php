<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitado', function (Blueprint $table) {
            $table->bigIncrements('idInvitado');
            $table->string('nombreCompletoInvitado');
            $table->integer('telefonoInvitado');
            $table->enum('generoInvitado', ['Masculino', 'Femenino', 'Otro']);
            $table->string('emailInvitado');
            $table->enum('statusInvitado', ['Activo', 'Inactivo'])->default('Activo');
            $table->unsignedBigInteger('fkFotoIdentificacionInvitado');
            $table->timestamps();
            $table->foreign('fkFotoIdentificacionInvitado')->references('idArchivo')->on('archivos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitado');
    }
}
