<?php

use App\Http\Controllers\BeritasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/profil', function () {
//     return view('profil');
// });

// Route::get('/hubungi', function () {
//     return view('hubungi');
// });




// Route::get('/berita', function () {
    //     $berita = "Berita seputar Sarolangun";
    //     return view('berita', ['berita' => $berita]);
// });

// Route::get('/', function () {
    //     return view('index');
    // });
    

    // user
    Route::get('/', 'BeritasController@index')->name('index_home');
    // Route::get('/berita', 'PagesController@berita');
    Route::get('/profil', 'PagesController@profil');

    // hubungi
    Route::get('/hubungi', 'TanggapanController@create');
    Route::post('/hubungi', 'TanggapanController@store');

    Route::get('/struktur_organisasi', 'PagesController@struktur_organisasi');
    
    Route::get('/berita', 'PagesController@berita');
    Route::get('/berita/{berita}', 'BeritasController@show');
    
    // Route::get('/bidang', 'PagesController@bidang');
    // Route::get('/galeri', 'PagesController@galeri');
    Route::get('/galeri', 'GaleriController@index');
    
    Route::get('/tugas_dan_fungsi', 'PagesController@tugas_dan_fungsi');
    Route::get('/visi_dan_misi', 'PagesController@visi_dan_misi');
    Route::get('/pengumuman', 'PengumumanController@index');
    







    // login & logout
    Route::get('/login', 'LoginController@create')->name('login');
    Route::post('/login', 'LoginController@store');
    Route::get('/logout', 'LoginController@logout');

    // Route::get('/login', function () {
    //     return view('admin/login');
    // });

    
    Route::get('/map', function () {
        return view('map');
    });
    


Route::group(['middleware'=>'auth'],function(){

    Route::get('/berita_admin', 'BeritasController@create');
    Route::get('{berita}/berita_admin','BeritasController@edit');
    Route::get('/pengumuman_admin', 'PengumumanController@create');
    Route::get('{pengumuman}/pengumuman_admin','PengumumanController@edit');

    Route::get('/dashboard_admin', function () {
        return view('admin/dashboard_admin');
    });
    
    // Route::get('/berita_admin', function () {
    //     return view('admin/berita');
    // });


    // berita admin
    Route::post('/berita_admin', 'BeritasController@store');
    Route::delete('/berita_admin/{berita}','BeritasController@destroy');
    Route::patch('/berita_admin/{berita}', 'BeritasController@update');

    //pengumuman admin
    Route::post('/pengumuman_admin', 'PengumumanController@store');
    Route::delete('/pengumuman_admin/{pengumuman}','PengumumanController@destroy');
    Route::patch('/pengumuman_admin/{pengumuman}', 'PengumumanController@update');
    
    Route::get('/bidang_admin', function () {
        return view('admin/bidang');
    });
    
    Route::get('/galeri_admin', function () {
        return view('admin/galeri');
    });
    
    // Route::get('/pengumuman_admin', function () {
    //     return view('admin/pengumuman');
    // });
    
    Route::get('/sponsor_admin', function () {
        return view('admin/sponsor');
    });
    
    Route::get('/struktur_organisasi_admin', function () {
        return view('admin/struktur_organisasi');
    });
    
    Route::get('/tugas_dan_fungsi_admin', function () {
        return view('admin/tugas_dan_fungsi');
    });
    
    
    Route::get('/visi_dan_misi_admin', function () {
        return view('admin/visi_dan_misi');
    });

    // Route::get('/contact_admin', function () {
    //     return view('admin/contact');
    // });
    Route::get('/contact_admin', 'TanggapanController@index');

    // Galeri Admin
    Route::get('/galeri_admin', 'GaleriController@create');
    Route::post('/galeri_admin', 'GaleriController@store');
    
});




    