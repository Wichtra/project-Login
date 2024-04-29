<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB dari namespace yang benar
use Illuminate\Support\Facades\Hash; // Import Hash dari namespace yang benar

class akunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akun')->insert([
            'username' => 'ad',
            'email' => 'admin@example.com',
            'password' => Hash::make('ad'),
            'level' => 1
        ]);
        DB::table('akun')->insert([
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('user'),
            'level' => 2
        ]);
    }
}
