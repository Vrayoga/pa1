<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class RegisterController extends Controller
{
    // Tampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Cari siswa berdasarkan NIS
        $siswa = Siswa::where('nis', $request->nis)->first();

        if (!$siswa) {
            return redirect()->back()->withErrors(['nis' => 'NIS tidak ditemukan.']);
        }

        // Cari user yang terhubung dengan siswa
        $user = User::where('siswas_id', $siswa->id)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['user' => 'User belum terdaftar untuk siswa ini.']);
        }

        // Login user
        Auth::login($user);

        return redirect('/landing')->with('success', 'Berhasil login sebagai siswa.');
    }
}
