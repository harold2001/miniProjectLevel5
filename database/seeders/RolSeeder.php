<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(["name" => "admin"]);
        $role2 = Role::create(["name" => "maestro"]);
        $role3 = Role::create(["name" => "alumno"]);

        Permission::create(["name" => "dash.home"])->syncRoles([$role1, $role2, $role3]);

        Permission::create(["name" => "admin.users.index"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.users.edit"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.users.update"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.cursos.index"])->syncRoles([$role1]);

        Permission::create(["name" => "maestro.cursos.index"])->syncRoles([$role2]);

        Permission::create(["name" => "alumno.cursos.index"])->syncRoles([$role3]);
        Permission::create(["name" => "alumno.cursos.create"])->syncRoles([$role3]);
        Permission::create(["name" => "alumno.cursos.edit"])->syncRoles([$role3]);
        Permission::create(["name" => "alumno.cursos.destroy"])->syncRoles([$role3]);
    }
}
