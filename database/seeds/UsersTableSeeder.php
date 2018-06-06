<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Usuario::create([
            'name'      => 'Jazmin Villamarin',
            'email'     => 'i@italomoralesf.com',
            'password'     => bcrypt('123'),

        ]);

        factory(App\Usuario::class, 7)->create();
    }
}
