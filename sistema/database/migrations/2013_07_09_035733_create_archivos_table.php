<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->bigIncrements('idArchivo');
            $table->string('nombreArchivo', 60);
            $table->string('extencionArchivo', 10);
            $table->double('tamanoArchivo');
            $table->string('uriArchivo', 160);
            $table->string('mimeArchivo', 20);
            $table->enum('statusArchivo', array('Activo', 'Inactivo'))->default('Activo');
            $table->enum('tipoArchivo', ['fotoPerfil', 'fotoPlaca', 'fotoIdentificacion', 'fotoQueja']);
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
        Schema::dropIfExists('archivos');
    }
}
