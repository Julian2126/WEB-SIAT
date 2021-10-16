<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alertas;

class AlertasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Alertas::factory(10)->create();
    }
}
