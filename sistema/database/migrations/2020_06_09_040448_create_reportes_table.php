<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('idReporte');
            $table->string('tituloReporte');
            $table->text('descripcionReporte');
            $table->time('horaCreacionReporte');
            $table->enum('statusReporte', ['Activo', 'Inactivo', 'Atendido'])->default('Activo');
            $table->unsignedBigInteger('fkPersonaReporte');
            $table->timestamps();
            $table->foreign('fkPersonaReporte')->references('idPersona')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
}
