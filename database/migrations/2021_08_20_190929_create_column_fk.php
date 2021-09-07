<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alertas', function (Blueprint $table) {
            $table->bigInteger("Id_padre")->unsigned();

            $table->foreign("Id_padre")->references("id")->on("padres");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alertas', function (Blueprint $table) {
            $table->dropColumn("Id_padre");
            //
        });
    }
}
