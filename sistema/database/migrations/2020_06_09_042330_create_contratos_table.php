<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->bigIncrements('idContrato');
            $table->date('fechaInicioContrato');
            $table->date('fechaFinContrato');
            $table->string('responsableContrato', 100);
            $table->enum('statusContrato', ['Activo','Inactivo'])->default('Activo');
            $table->unsignedBigInteger('fkCondominioContrato');
            $table->timestamps();
            $table->foreign('fkCondominioContrato')->references('idCondominio')->on('condominios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
