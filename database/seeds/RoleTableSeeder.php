<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'administrador',
            'slug' => 'Administrador Principal',
            'description' => 'Administrador General del sitio web',
        ]);
        Role::create([
            'name' => 'administrador_auditoria',
            'slug' => 'auditoria',
            'description' => 'Administrador Departamento Auditoria',
        ]);
        Role::create([
            'name' => 'administrador_compras',
            'slug' => 'compras',
            'description' => 'Administrador Departamento Compras',
        ]);
        Role::create([
            'name' => 'administrador_conta',
            'slug' => 'contabilidad',
            'description' => 'Administrador Departamento Contabilidad',
        ]);
        Role::create([
            'name' => 'administrador_marketing',
            'slug' => 'marketing',
            'description' => 'Administrador Departamento Marketing',
        ]);
        Role::create([
            'name' => 'administrador_rrhh',
            'slug' => 'rrhh',
            'description' => 'Administrador Departamento Recursos Humanos',
        ]);
        Role::create([
            'name' => 'administrador_sistemas',
            'slug' => 'sistemas',
            'description' => 'Administrador Departamento Sistemas',
        ]);

    }
}
