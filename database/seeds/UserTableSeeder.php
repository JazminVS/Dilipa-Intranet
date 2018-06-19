<?php


use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_admin = Role::where('name', 'administrador')->first();
        $rol_auditoria = Role::where('name', 'administrador_auditoria')->first();
        $rol_compras = Role::where('name', 'administrador_compras')->first();
        $rol_conta = Role::where('name', 'administrador_conta')->first();
        $rol_marketing = Role::where('name', 'administrador_marketing')->first();
        $rol_rrhh = Role::where('name', 'administrador_rrhh')->first();
        $rol_sistemas = Role::where('name', 'administrador_sistemas')->first();

        $user = new User();
        $user->username = 'admin';
        $user->name = 'Administrador';
        $user->lastname = 'Administrador';
        $user->email= 'user@admin.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($rol_admin);


        $user = new User();
        $user->username = 'auditoria';
        $user->name = 'Administrador';
        $user->lastname = 'Auditoria';
        $user->email= 'auditoria@admin.com';
        $user->password = bcrypt('auditoria');
        $user->save();
        $user->roles()->attach($rol_auditoria);

        $user = new User();
        $user->username = 'compras';
        $user->name = 'Administrador';
        $user->lastname = 'Compras';
        $user->email= 'compras@admin.com';
        $user->password = bcrypt('compras');
        $user->save();
        $user->roles()->attach($rol_compras);

        $user = new User();
        $user->username = 'contabilidad';
        $user->name = 'Administrador';
        $user->lastname = 'Contabilidad';
        $user->email= 'contabilidad@admin.com';
        $user->password = bcrypt('contabilidad');
        $user->save();
        $user->roles()->attach($rol_conta);

        $user = new User();
        $user->username = 'marketing';
        $user->name = 'Administrador';
        $user->lastname = 'Marketing';
        $user->email= 'marketing@admin.com';
        $user->password = bcrypt('marketing');
        $user->save();
        $user->roles()->attach($rol_marketing);

        $user = new User();
        $user->username = 'recursos';
        $user->name = 'Administrador';
        $user->lastname = 'RRHH';
        $user->email= 'rrhh@admin.com';
        $user->password = bcrypt('recursos');
        $user->save();
        $user->roles()->attach($rol_rrhh);

        $user = new User();
        $user->username = 'sistemas';
        $user->name = 'Administrador';
        $user->lastname = 'Sistemas';
        $user->email= 'sistemas@admin.com';
        $user->password = bcrypt('sistemas');
        $user->save();
        $user->roles()->attach($rol_sistemas);

    }
}
