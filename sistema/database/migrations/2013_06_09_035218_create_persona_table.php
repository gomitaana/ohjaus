<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('idPersona');
            $table->string('nombrePersona');
            $table->string('apellidosPersona');
            $table->integer('telefonoPersona');
            $table->enum('generoPersona', ['Femenino', 'Masculino', 'Otro']);
            $table->date('fechaNacimientoPersona');
            $table->enum('statusPersona', ['Activo','Inactivo'])->default('Activo');
            $table->enum('tipoUsuario',['AdminMaster','Admin','Usuario','Vigilante']);
            $table->unsignedBigInteger('fkFotoPerfilUsuario');
            $table->foreignId('user_id')->constrained();
            $table->foreign('fkFotoPerfilUsuario')->references('idArchivo')->on('archivos');
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
        Schema::dropIfExists('persona');
    }
}
