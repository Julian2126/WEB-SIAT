<?php

namespace Database\Seeders;

use App\Models\Ficha_tecnica;
use Illuminate\Database\Seeder;

class Ficha_tecnicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ficha_tecnica::factory(10)->create();
    }
}
