<?php

namespace App\Http\Controllers;

use App\Berita;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita = Berita::all();
        return View('home', compact('berita'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berita = Berita::all();
        return View('admin.berita', compact('berita'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara 1
        // return $request;
        // $berita = new Berita;
        // $berita->judul = $request->judul;
        // $berita->foto = $request->foto;
        // $berita->berita = $request->berita;

        // $berita->save();    

        // cara 2
        // Berita::create([
        //     'judul' => $request->judul,
        //     'foto' => $request->foto,
        //     'berita' => $request->berita
        // ]);

        
        // cara 3
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png',
            'berita' => 'required'
        ]);


        // dd($request->foto);
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->berita = $request->berita;


        $gambar = $request->file('foto');
        $extension = $gambar->getClientOriginalExtension();
        $nama = $gambar->getClientOriginalName();
        Storage::disk('public')->put($nama,  File::get($gambar));
        $berita->foto = $nama;
        
        
        $berita->save();

        // return 'uploaded';
    
        // $request->foto->storeAs('berita', $filename,  'public');

        //intervention magic happens here, we are resizing the image before saving to db

        // Berita::create($request->all());    
        return redirect('/berita_admin')->with('status', 'data berita berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
        // dd($berita->all());
        // return $berita;
        return view('ajax-message', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('admin.edit_berita', compact('berita'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        // return $berita;
        $request->validate([
            'judul' => 'required',
            'foto' => 'required',
            'berita' => 'required'
        ]);
        
        Berita::where('id', $berita->id)
            ->update([
                'judul' => $request->judul,
                'foto' => $request->foto,
                'berita' => $request->berita
            ]);

        return redirect('/berita_admin')->with('status', 'data berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
        Berita::destroy($berita->id);
        return redirect('/berita_admin')->with('status', 'data berita berhasil dihapus');
    }
}
