<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('Placa', 10);
            $table->string('Marca', 30);
            $table->integer('Modelo');
            $table->integer('Numero_sillas');
            $table->string('Motor', 20);
            $table->string('Estado', 10);
            $table->string('Medida_ancho', 8, 2);
            $table->string('Medida_altura', 8, 2);
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
        Schema::dropIfExists('vehiculos');
    }
}
