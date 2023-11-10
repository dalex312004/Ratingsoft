<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('enlace');
            $table->unsignedInteger('idTipoDocumento');
            $table->unsignedInteger('idPersona');

            $table->foreign('idTipoDocumento')->references('id')->on('tipoDocumento');
            $table->foreign('idPersona')->references('id')->on('persona');


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
        Schema::dropIfExists('documento');
    }
}
