<?php

namespace App\Http\Controllers;

use App\galery;
use App\isi_galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = \App\isi_galery::all();
        // dump($pengumuman);
        return view('galeri', ['galeri'=> $galeri]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $galeri = \App\isi_galery::all();
        // dump($pengumuman);
        return view('admin.galeri', ['galeri'=> $galeri]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png'
        ]);


        // dd($request->foto);
        $galeri = new galery();
        $isi_galeri = new isi_galery();
        $galeri->nama = $request->nama;
        

        $gambar = $request->file('foto');
        $extension = $gambar->getClientOriginalExtension();
        $nama = $gambar->getClientOriginalName();
        Storage::disk('public')->put($nama,  File::get($gambar));
        $isi_galeri->letak = $nama;
        $isi_galeri->jenis = $extension;
        $isi_galeri->galeri_id = $galeri->id;
        
        
        $galeri->save();
        $isi_galeri->save();

        // return 'uploaded';
    
        // $request->foto->storeAs('gal$galeri', $filename,  'public');

        //intervention magic happens here, we are resizing the image before saving to db

        // Berita::create($request->all());    
        return redirect('/galeri_admin')->with('status', 'data galeri berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
