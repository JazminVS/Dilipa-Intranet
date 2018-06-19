<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administradores
        Permission::create([
            'name' => 'Autorizacion a Departamento Auditoria',
            'slug' => 'departamentos_login.auditoria_acceso',
            'description' => 'Acceso al departamento Auditoria por parte del administrador',
        ]);

        Permission::create([
            'name' => 'Autorizacion a Departamento Compras',
            'slug' => 'departamentos_login.compras_acceso',
            'description' => 'Acceso al departamento Compras por parte del administrador',
        ]);

        Permission::create([
            'name'=>'Autorizacion a Departamento Contabilidad',
            'slug'=>'departamentos_login.conta_acceso',
            'description'=>'Acceso al departamento Contabilidad por parte del administrador',
        ]);
        Permission::create([
            'name'=>'Autorizacion a Departamento Marketing',
            'slug'=>'departamentos_login.marketing_acceso',
            'description'=>'Acceso al departamento Marketing por parte del administrador',
        ]);
        Permission::create([
            'name'=>'Autorizacion a Departamento RRHH',
            'slug'=>'departamentos_login.rrhh_acceso',
            'description'=>'Acceso al departamento de Recursos Humanos por parte del administrador',
        ]);
        Permission::create([
            'name'=>'Autorizacion a Departamento Sistemas',
            'slug'=>'departamentos_login.sistemas_acceso',
            'description'=>'Acceso al departamento Sistemas por parte del administrador',
        ]);

    }
}
