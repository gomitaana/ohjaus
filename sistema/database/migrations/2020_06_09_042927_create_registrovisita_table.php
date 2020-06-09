<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrovisitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrovisita', function (Blueprint $table) {
            $table->bigIncrements('idRegistroVisita');
            $table->unsignedBigInteger('fkTicketSolicitudVisita');
            $table->time('horaLlegadaVisita');
            $table->date('fechaLlegadaVisita');
            $table->time('horaSalidaVisita');
            $table->date('fechaSalidaVisita');
            $table->string('llegadaAutorizadaPor');
            $table->string('salidaAutorizadaPor');
            $table->string('placaAutoVisita');
            $table->string('motivoVisita');
            $table->timestamps();
            $table->foreign('fkTicketSolicitudVisita')->references('idTicket')->on('ticketsolicitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrovisita');
    }
}
