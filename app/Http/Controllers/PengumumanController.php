<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengumuman = Pengumuman::all();
        return View('pengumuman', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pengumuman = Pengumuman::all();
        return View('admin.pengumuman', compact('pengumuman'));
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
            'judul' => 'required',
            'sub_judul' => 'required',
            'pengumuman' => 'required'
        ]);

        // cara 3
        Pengumuman::create($request->all());
        return redirect('/pengumuman_admin')->with('status', 'data berita berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
        return view('admin.edit_pengumuman', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        //
        $request->validate([
            'judul' => 'required',
            'sub_judul' => 'required',
            'pengumuman' => 'required'
        ]);
        
        Pengumuman::where('id', $pengumuman->id)
            ->update([
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
                'pengumuman' => $request->Pengumuman
            ]);

        return redirect('/pengumuman_admin')->with('status', 'data berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        //
        Pengumuman::destroy($pengumuman->id);
        return redirect('/pengumuman_admin')->with('status', 'data berita berhasil dihapus');
    }
}
