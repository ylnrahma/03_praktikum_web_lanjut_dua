<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
<<<<<<< HEAD
            ->with('full_name', 'Yuliyana Rahmawati')
            ->with('short_name', 'Rahma')
            ->with('nim', '2141720241')
            ->with('absen', '26')
=======
            ->with('full_name', 'Yasmine Navisha Andhani')
            ->with('short_name', 'Yasmine')
            ->with('nim', '2141720047')
            ->with('absen', '25')
>>>>>>> 4bf0e7337b6ae66e241cad0f24e8aacfb92d7bc1
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
<<<<<<< HEAD
            ->with('email', 'yuliyanarahma03@gmail.com')
            ->with('usertelegram', 'ylnrahma')
            ->with('tiktok', 'ylnrahmaa')
            ->with('idline', '@ylynrahma')
            ->with('ig', '@ylnrahma')
            ->with('yfull_name', 'Yasmine Navisha Andhani')
            ->with('yshort_name', 'Yasmine')
            ->with('ynim', '2141720047')
            ->with('yabsen', '25')
            ->with('yclass', 'TI-2F')
            ->with('yprodi', 'D4 Teknik Informatika')
            ->with('yjurusan', 'Jurusan Teknologi Informasi')
            ->with('ykampus', 'Politeknik Negeri Malang')
            ->with('yemail', 'yasminenavishaa@gmail.com')
            ->with('ytiktok', 'yaasss.mine')
            ->with('yig', '@yasminenavishaa');
    }
}
=======
            ->with('email', 'yasminenavishaa@gmail.com');
    }
}
>>>>>>> 4bf0e7337b6ae66e241cad0f24e8aacfb92d7bc1
