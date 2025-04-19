<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {

        Siswa::create([
            'nama' => 'admin',
            'nis' => '99999999',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Siswa::insert([
            [
                'nama' => 'Ahmad Fauzi',
                'nis' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'AnandaMw',
                'nis' => '2202310054',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Citra Dewi',
                'nis' => '1234567892',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dian Pratama',
                'nis' => '1234567893',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Eka Saputra',
                'nis' => '1234567894',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
