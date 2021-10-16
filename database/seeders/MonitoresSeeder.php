<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Monitores;

class MonitoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Monitores::factory(10)->create();
    }
}
