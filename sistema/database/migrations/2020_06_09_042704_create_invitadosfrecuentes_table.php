<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitadosfrecuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitadosfrecuentes', function (Blueprint $table) {
            $table->bigIncrements('idInvitadoFrecuente');
            $table->unsignedBigInteger('fkCasaInvitadoFrecuente');
            $table->unsignedBigInteger('fkPersonaInvitadoFrecuente');
            $table->unsignedBigInteger('fkInvitadoInvitadoFrecuente');
            $table->timestamps();
            $table->enum('statusInvitadoFrecuente',['Activo','Inactivo'])->default('Activo');
            $table->foreign('fkCasaInvitadoFrecuente')->references('idCasa')->on('casas');
            $table->foreign('fkPersonaInvitadoFrecuente')->references('idPersona')->on('persona');
            $table->foreign('fkInvitadoInvitadoFrecuente')->references('idInvitado')->on('invitado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitadosfrecuentes');
    }
}
