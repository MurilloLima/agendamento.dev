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
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
