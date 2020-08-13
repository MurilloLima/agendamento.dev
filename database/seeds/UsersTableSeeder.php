<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'plano_id' => 1,
            'name' => 'Client',
            'email' => 'client@admin.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'client',
            'fone' => '00000',
            'cpf' => '00000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'plano_id' => 1,
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'admin',
            'fone' => '00000',
            'cpf' => '00000',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
