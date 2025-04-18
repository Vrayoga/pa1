<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{

    protected $table = 'siswas';

    protected $fillable = [
        'nama_siswa',
        'sekolah_asal',
        'tanggal_lahir',
        'nis',
        'alamat',
        'image',
        'no_telepon',
    ];
}
