<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTecnicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_tecnica', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_creacion');
            $table->string('Propietario', 100);
            $table->string('Soat', 50);
            $table->string('Tecnomecanica', 50);
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
        Schema::dropIfExists('ficha_tecnica');
    }
}
