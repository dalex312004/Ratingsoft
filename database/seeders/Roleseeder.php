<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2  = Role::create(['name'=>'Usuario']);
        $role3  = Role::create(['name'=>'Profesor']);
        $role4  = Role::create(['name'=>'Directivo']);
        $role5  = Role::create(['name'=>'alumno']);

        // permisos para el home del admin
        Permission::create(['name'=>'admin.index',
                            'description' => 'Ver el dashboard'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.index',
                            'description' => 'Ver el listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.index',
                            'description' => 'Ver listado roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit',
                            'description' => 'Asignar un rol'])->syncRoles([$role1]);

        //permisos para las asignaturas
        Permission::create(['name'=>'gestionAsignaturas.index',
                            'description' => "Gestion asignaturas"])->syncRoles([$role1]);
        Permission::create(['name'=>'asignaturas.index',
                            'description' => "Ver Listado de asignaturas"])->syncRoles([$role1]);
        Permission::create(['name'=>'asignaturas.create',
                            'description' => 'Crear asignatura'])->syncRoles([$role1]);
        Permission::create(['name'=>'asignaturas.edit',
                            'description' => 'Editar asignatura'])->syncRoles([$role1]);
        Permission::create(['name'=>'asignaturas.destroy',
                            'description' => 'Eliminar asignatura'])->syncRoles([$role1]);
        Permission::create(['name'=>'asignaturas.show',
                            'description' => 'Ver asignatura'])->syncRoles([$role1]);

        //permisos directivos
        Permission::create(['name'=>'directivo.index',
                            'description' => 'gestion Directivos'])->syncRoles([$role1]);

        //gestion de personal
        Permission::create(['name'=>'gestionPersonal.index',
                            'description' => 'gestion Personal'])->syncRoles([$role1]);
        
        //permisos para gestions de  profesores
        Permission::create(['name'=>'profesor.index',
                            'description' => 'Ver listado profesores'])->syncRoles([$role1]);
        Permission::create(['name'=>'profesor.create',
                            'description' => 'Crear profesor'])->syncRoles([$role1]);
        Permission::create(['name'=>'profesor.edit',
                            'description' => 'Editar profesor'])->syncRoles([$role1]);
        Permission::create(['name'=>'profesor.show',
                            'description' => 'Ver profesor'])->syncRoles([$role1]);
        Permission::create(['name'=>'profesor.destroy',
                            'description' => 'Eliminar profesor'])->syncRoles([$role1]);

        //permisos para gestuion de estudiantes
        Permission::create(['name'=>'alumnos.index',
                            'description' => 'Ver listado profesores'])->syncRoles([$role1]);
        Permission::create(['name'=>'alumnos.create',
                            'description' => 'Crear profesor'])->syncRoles([$role1]);
        Permission::create(['name'=>'alumnos.edit',
                            'description' => 'Editar profesor'])->syncRoles([$role1]);
        Permission::create(['name'=>'alumnos.show',
                            'description' => 'Ver profesor'])->syncRoles([$role1]);
        Permission::create(['name'=>'alumnos.destroy',
                            'description' => 'Eliminar profesor'])->syncRoles([$role1]);

        //permisos para tipo asignatiura
        Permission::create(['name'=>'tipoAsignaturas.index',
                            'description' => 'Ver listado tipo asignaturas'])->syncRoles([$role1]);;
        Permission::create(['name'=>'tipoAsignaturas.create',
                            'description' => 'Crear tipo asignatura'])->syncRoles([$role1]);
        Permission::create(['name'=>'tipoAsignaturas.edit',
                            'description' => 'Editar tipo asignatura'])->syncRoles([$role1]);
        Permission::create(['name'=>'tipoAsignaturas.destroy',
                            'description' => 'Eliminar tipo asignatura'])->syncRoles([$role1]);
        Permission::create(['name'=>'tipoAsignaturas.show',
                            'description' => 'Ver tipo asignatura'])->syncRoles([$role1]);


        //permisos para cursos
        Permission::create(['name'=>'curso.index',
                            'description' => 'Ver listado de cursos'])->syncRoles([$role1]);;
        Permission::create(['name'=>'curso.create',
                            'description' => 'Crear curso'])->syncRoles([$role1]);
        Permission::create(['name'=>'curso.edit',
                            'description' => 'Editar curso'])->syncRoles([$role1]);
        Permission::create(['name'=>'curso.destroy',
                            'description' => 'Eliminar curso'])->syncRoles([$role1]);
        Permission::create(['name'=>'curso.show',
                            'description' => 'Ver curso'])->syncRoles([$role1]);

    }
}
