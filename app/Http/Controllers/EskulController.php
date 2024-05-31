<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskul = eskul::all();
        return view('eskul.index', compact('eskul'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eskul = eskul::all();
        return view('eskul.create', compact('eskul'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eskul = new eskul;
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->isi = $request->isi;
        $eskul->save();
        return redirect()->route('eskul.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eskul = eskul::findOrFail($id);
        return view('eskul.show', compact('eskul'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eskul = eskul::findOrFail($id);
        return view('eskul.edit', compact('eskul'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eskul = eskul::findOrFail($id);
        $eskul-> nama_eskul = $request->nama_eskul;
        $eskul-> isi = $request->isi;
        $eskul->save();
        return redirect()->route('eskul.index');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eskul = eskul::findOrFail($id);
        $eskul->delete();
        return redirect()->route('eskul.index');

    }
}
