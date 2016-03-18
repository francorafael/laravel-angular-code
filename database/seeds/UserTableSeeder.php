<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //METODO PARA INSERIR DADOS NO BANCO FICTICIO
        DB::table('users')->truncate();

        \App\User::create([
            'name' => 'Rafael Franco',
            'email' => 'rafael@rafael.com',
            'password' => '123456'
        ]);

    }
}
