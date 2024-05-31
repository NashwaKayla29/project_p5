<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::all();
        return view('guru.index', compact('guru'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = guru::all();
        $mapel = mapel::all();
        return view('guru.create', compact('guru', 'mapel'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new guru;
        $guru->nama_guru = $request->nama_guru;
        $guru->telepon = $request->telepon;
        $guru->email = $request->email;
        $guru->id_mapel = $request->id_mapel;

        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/guru', $name);
            $guru->sampul = $name;
        }

        $guru->save();
        return redirect()->route('guru.index')->with('success', 'Data Berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = guru::findOrFail($id);
        $mapel = mapel::all();
        return view('guru.show', compact('guru', 'mapel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = guru::all();
        $mapel = mapel::all();
        return view('guru.create', compact('guru', 'mapel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = guru::findOrFail($id);
        $guru->nama_guru = $request->nama_guru;
        $guru->telepon = $request->telepon;
        $guru->email = $request->email;
        $guru->id_mapel = $request->id_mapel;

        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/guru', $name);
            $guru->sampul = $name;
        }

        $guru->save();
        return redirect()->route('guru.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru.index');

    }
}
