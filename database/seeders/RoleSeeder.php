<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = Role::create(['name'=> 'Administrador']);
        $role2 = Role::create(['name'=> 'Usuario']);
        $role3 = Role::create(['name' => 'Conductor']);
        $role4 = Role::create(['name' => 'Acudiente']);
        $role5 = Role::create(['name' => 'Monitora']);

        Permission::create(['name' => 'menu Administrador'])->syncRoles($role);
        Permission::create(['name' => 'menu Usuario'])->syncRoles($role2,$role);
        Permission::create(['name' => 'Ver Conductor'])->syncRoles($role3);
        Permission::create(['name' => 'Ver Padres'])->syncRoles($role4);
        Permission::create(['name' => 'Ver Monitores'])->syncRoles($role,$role5);
        Permission::create(['name' => 'Ver Estudiantes'])->syncRoles($role);
    }
}
