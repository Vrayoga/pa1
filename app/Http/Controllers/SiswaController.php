<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    // Tampilkan semua siswa
    public function index()
    {
        $siswa = Siswa::all();
        return view('halaman-admin.siswa.index', compact('siswa'));
    }

    // Tampilkan form tambah siswa
    public function create()
    {
        return view('Halaman-admin.siswa.create');
    }

    public function store(Request $request)
    {



        $pw =  Str::random(8);
        echo '
        <script>
            alert("Password: ' . 'SMK_' . $pw . '");
        </script>

    ';

        $data = [
            'nama_siswa' => $request->nama_siswa,
            'sekolah_asal' => $request->sekolah_asal,
            'alamat' => $request->alamat,
            'nis' => $request->nis,
        ];

        $siswa =  Siswa::create($data);


        User::create([
            'siswas_id' => $siswa->id,
            'password' => bcrypt('SMK_' . $pw),
            'name' =>  $request->nama_siswa,
            // 'email' => Str::random(8) . '@gmail.com',
        ]);



        return view('Halaman-admin.siswa.create');
    }





    public function RegisterSiswa(Request $request)
    {
        $siswa = Siswa::where('nis', $request->nis)
            ->where('nama_siswa', $request->nama_siswa)
            ->first();

        if ($siswa) {
            // Login manual ke guard 'siswa'
            Auth::guard('siswa')->login($siswa);

            // Update data siswa
            $siswa->update([
                'email' => $request->input('email'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
            ]);

            return redirect()->intended('landing')->with('success', 'Data siswa berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'NIS atau Nama Siswa tidak ditemukan.');
        }
    }



    // Tampilkan detail siswa
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    // Form edit
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    // Update data siswa
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nis' => 'required|string|unique:siswa,nis,' . $siswa->id,
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diupdate.');
    }

    // Hapus siswa
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
