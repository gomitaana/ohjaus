<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->string('nombreClaveUsuario');
            $table->string('emailUsuario')->unique();
            $table->timestamp('emailUsuario_verified_at')->nullable();
            $table->string('passwordUsuario');
            $table->enum('tipoUsuario',['AdminMaster','Admin','Usuario','Vigilante']);
            $table->unsignedBigInteger('fkPersonaUsuario');
            $table->unsignedBigInteger('fkFotoPerfilUsuario');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('statusUsuario', ['Activo','Inactivo'])->default('Activo');
            $table->foreign('fkPersonaUsuario')->references('idPersona')->on('persona');
            $table->foreign('fkFotoPerfilUsuario')->references('idArchivo')->on('archivos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
