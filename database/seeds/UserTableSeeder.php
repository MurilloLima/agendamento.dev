<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Client',
            'email' => 'client@admin.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'client',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'admin',
            'date_nasc',
            'idade' => 22,
            'cpf' => '222.222.222-00',
            'rg' => '9889000',
            'peso' => 89,
            'altura' => 1.90,
            'endereco' =>   'Centro',
            'bairro' => 'Centro',
            'cidade' => 'São Paulo',
            'cep' => '090932-000',
            'profissao' => 'Analista',
            'fone' => '(99)99999-9999',
            'img' => 'img',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
