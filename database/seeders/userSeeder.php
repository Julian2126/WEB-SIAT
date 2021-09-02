<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Julian Gomez',
        'email'=>"jdgomez@gmail.com",
        'password'=>bcrypt('123456789'),
        ])->assignRole('Administrador');

        User::create([
            'name'=>'Julian David',
        'email'=>"jd1@gmail.com",
        'password'=>bcrypt('123456789'),
        ])->assignRole('Conductor');

        User::create([
            'name'=>'Dana ',
        'email'=>"dana@gmail.com",
        'password'=>bcrypt('123456789'),
        ])->assignRole('Monitora');

        User::create([
            'name'=>'Oscar Rangel',
        'email'=>"oscar@gmail.com",
        'password'=>bcrypt('123456789'),
        ])->assignRole('Usuario');

        User::factory(10)->create();
    }
}
