<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'siswas_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siswa User',
                'email' => 'siswa@gmail.com',
                'password' => Hash::make('siswa'),
                'role' => 'siswa',
                'siswas_id' => 1, // Pastikan ID siswa sesuai dengan data di tabel siswas
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guru Pembimbing',
                'email' => 'guru@gmail.com',
                'password' => Hash::make('guru'),
                'role' => 'guru_pembimbing',
                'siswas_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
