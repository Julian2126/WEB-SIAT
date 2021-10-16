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
            $table->string('Origen', 50);
            $table->decimal('Latitud_origen', 10,8);
            $table->decimal('Longitud_origen', 11,8);
            $table->string('Destino', 50);
            $table->decimal('Latitud_destino', 10,8);
            $table->decimal('Longitud_destino', 11,8);
            $table->bigInteger("vehiculo_id")->unsigned();

            $table->foreign("vehiculo_id")->references("id")->on("vehiculos");
                 
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
