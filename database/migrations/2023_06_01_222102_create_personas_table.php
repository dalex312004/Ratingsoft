<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre1')->nullable();
            $table->string('nombre2')->nullable();
            $table->string('apellido1')->nullable();
            $table->string('apellido2')->nullable();
            $table->unsignedInteger('idTipoIdentificacion')->nullable();
            $table->string('identificacion')->unique()->nullable();
            $table->date('fechaNac')->nullable();
            $table->char('sexo', 1)->nullable();
            $table->char('rh', 5)->nullable();
            $table->string('direccion')->nullable();
            $table->string('email')->nullable();
            $table->string('telefonoFijo')->nullable();
            $table->string('celular')->nullable();
            $table->string('padre')->nullable();
            $table->string('ocupacionPadre')->nullable();
            $table->string('madre')->nullable();
            $table->string('ocupacionMadre')->nullable();
            $table->unsignedInteger('idGrado')->nullable();

            $table->foreign('idGrado')->references('id')->on('grado');
            $table->foreign('idTipoIdentificacion')->references('id')->on('tipoidentificacion');
        
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
