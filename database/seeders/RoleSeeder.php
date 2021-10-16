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

        Permission::create(['name' => 'Ver Vehiculos'])->syncRoles($role,$role3,$role2);
        Permission::create(['name' => 'crear Vehiculos'])->syncRoles($role);
        Permission::create(['name' => 'modificar Vehiculos'])->syncRoles($role);
        Permission::create(['name' => 'eliminar Vehiculos'])->syncRoles($role);

        Permission::create(['name' => 'Ver Conductor'])->syncRoles($role3,$role,$role2);
        Permission::create(['name' => 'Modificar Conductor'])->syncRoles($role5,$role);
        Permission::create(['name' => 'Crear Conductor'])->syncRoles($role);
        Permission::create(['name' => 'eliminar Conductor'])->syncRoles($role);

        Permission::create(['name' => 'Ver Monitores'])->syncRoles($role,$role5,$role2);
        Permission::create(['name' => 'modificar Monitores'])->syncRoles($role,$role5);
        Permission::create(['name' => 'Crear Monitores'])->syncRoles($role);
        Permission::create(['name' => 'eliminar Monitores'])->syncRoles($role);
        
        Permission::create(['name' => 'Ver Ficha Tecnica'])->syncRoles($role,$role3,$role4,$role2);
        Permission::create(['name' => 'Modificar Ficha'])->syncRoles($role);
        Permission::create(['name' => 'Crear Ficha'])->syncRoles($role);
        Permission::create(['name' => 'Eliminar Ficha'])->syncRoles($role);

        Permission::create(['name' => 'Ver Estudiantes'])->syncRoles($role,$role4,$role2);
        Permission::create(['name' => 'Modificar Estudiantes'])->syncRoles($role,$role5);
        Permission::create(['name' => 'Crear Estudiantes'])->syncRoles($role,$role5);
        Permission::create(['name' => 'Eliminar Estudiantes'])->syncRoles($role,$role5);

        Permission::create(['name' => 'Ver Padres'])->syncRoles($role4,$role,$role5,$role2);
        Permission::create(['name' => 'Modificar Padres'])->syncRoles($role5,$role);
        Permission::create(['name' => 'Crear Padres'])->syncRoles($role,$role5);
        Permission::create(['name' => 'Eliminar Padres'])->syncRoles($role);

        Permission::create(['name' => 'Ver rutas'])->syncRoles($role,$role2);
        Permission::create(['name' => 'Modificar rutas'])->syncRoles($role);
        Permission::create(['name' => 'crear rutas'])->syncRoles($role);
        Permission::create(['name' => 'Eliminar rutas'])->syncRoles($role);

        Permission::create(['name' => 'Ver alertas'])->syncRoles($role,$role2,$role3);
        Permission::create(['name' => 'modificar alertas'])->syncRoles($role);
        Permission::create(['name' => 'crear alertas'])->syncRoles($role);
        Permission::create(['name' => 'Eliminar alertas'])->syncRoles($role);

    }
}
