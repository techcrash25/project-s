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
        $adminRole = Role::create(['name' => 'admin']);
        $studentRole = Role::create(['name' => 'student']);
        $teacherRole = Role::create(['name' => 'teacher']);

        Permission::create(['name' => 'admin.docente.index'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.docente.create'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.docente.edit'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.docente.destroy'])->syncRoles([$adminRole]);


        Permission::create(['name' => 'admin.asignatura.index'])->syncRoles([$adminRole, $studentRole, $teacherRole]);
        Permission::create(['name' => 'admin.asignatura.create'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.asignatura.edit'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.asignatura.destroy'])->syncRoles([$adminRole]);

        Permission::create(['name' => 'admin.estudiante.index'])->syncRoles([$adminRole, $teacherRole]);
        Permission::create(['name' => 'admin.estudiante.create'])->syncRoles([$adminRole, $teacherRole]);
        Permission::create(['name' => 'admin.estudiante.edit'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.estudiante.destroy'])->syncRoles([$adminRole]);
    }
}
