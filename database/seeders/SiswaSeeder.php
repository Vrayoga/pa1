<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::create([
            'nama_siswa' => 'John Doe',
            'sekolah_asal' => 'SMK Negeri 1',
            'tanggal_lahir' => '2005-01-01',
            'nis' => '123456789',
            'alamat' => 'Jl. Merdeka No. 1',
            'no_telepon' => '081234567890',
        ]);
    }
}
