<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Yasmine Navisha Andhani')
            ->with('short_name', 'Yasmine')
            ->with('nim', '2141720047')
            ->with('absen', '25')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'yasminenavishaa@gmail.com');
    }
}
