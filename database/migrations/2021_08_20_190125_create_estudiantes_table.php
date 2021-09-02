<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('Numero_identificacion', 15);
            $table->string('Nombre', 15);
            $table->string('Apellido', 15);
            $table->string('Grado', 5);
            $table->integer('Edad');
            $table->bigInteger("Id_ruta")->unsigned();

            $table->foreign("Id_ruta")->references("id")->on("rutas");
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
        Schema::dropIfExists('estudiantes');
    }
}
