<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id();
            $table->string('Nit', 50);
            $table->string('Nombre', 50);
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
        Schema::dropIfExists('instituciones');
    }
}
