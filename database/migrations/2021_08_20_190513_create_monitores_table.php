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
            $table->string('Cedula_monitor', 30);
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('Telefono', 50);
            $table->string('Email', 50);
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
