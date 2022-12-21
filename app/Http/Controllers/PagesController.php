<?php

namespace App\Http\Controllers;

use App\berita;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    // public function berita(){
    //     $berita = "Seputar Berita tentang Diskominfo Sarolangun";
    //     return view('berita', ['berita' => $berita]);
    // }

    public function profil(){
        return view('profil');
    }

    public function hubungi(){
        return view('hubungi');
    }

    public function struktur_organisasi(){
        return view('struktur_organisasi');
    }
    
    public function berita(){
        return view('berita');
    }

    public function bidang(){
        return view('bidang');
    }

    public function galeri(){
        return view('galeri');
    }
    public function pengumuman(){
        return view('pengumuman');
    }

    public function visi_dan_misi(){
        return view('visi_dan_misi');
    }

    public function tugas_dan_fungsi(){
        return view('tugas_dan_fungsi');
    }


}
