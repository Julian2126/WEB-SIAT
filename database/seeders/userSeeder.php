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
        User::create(['name'=>'oscarrangel',
        'email'=>"oscarorangelt@gmail.com",
        'password'=>bcrypt('123456789'),
        ])->assignRole('Administrador');

        User::create(['name'=>'Usuario Consulta',
        'email'=>'oorangelt@gmail.com',
        'password'=>bcrypt('123456789'),
        ])->assignRole('Usuario');
        User::factory(10)->create();

        User::create(['name'=>'Juan Diaz',
        'email'=>'juan.diaz@gmail.com',
        'password'=>bcrypt('123456789'),
        ])->assignRole('Acudiente');
        User::factory(10)->create();

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
    }
}

