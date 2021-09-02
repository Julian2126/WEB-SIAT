<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitores', function (Blueprint $table) {
            $table->id();
            $table->string('Cedula_monitor', 10);
            $table->string('Nombre', 15);
            $table->string('Apellido', 15);
            $table->string('Telefono', 15);
            $table->string('Email', 30);
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
        Schema::dropIfExists('monitores');
    }
}
