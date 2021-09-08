<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductors', function (Blueprint $table) {
            $table->id();
            $table->string('Numero_identificacion', 30);
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('Licencia_conduccion', 30);
            $table->string('Telefono', 30);
            $table->string('Email', 50);
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
        Schema::dropIfExists('conductors');
    }
}
