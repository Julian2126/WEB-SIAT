<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->id();
            $table->string('Cedula_padre', 30);
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('Telefono', 50);
            $table->string('Email', 50);
            $table->bigInteger("Id_estudiante")->unsigned();

            $table->foreign("Id_estudiante")->references("id")->on("estudiantes");
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
        Schema::dropIfExists('padres');
    }
}
