<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->integer('Numero_ruta');
            $table->integer('Numero_estudiantes');
            $table->string('Hubicacion_gps', 100);
            $table->string('Origen', 50);
            $table->string('Destino', 50);
            $table->bigInteger("Id_vehiculo")->unsigned();

            $table->foreign("Id_vehiculo")->references("id")->on("vehiculos");
                 
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
        Schema::dropIfExists('rutas');
    }
}
