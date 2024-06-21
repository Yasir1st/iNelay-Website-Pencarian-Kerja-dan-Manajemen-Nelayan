<?php

namespace App\Http\Controllers;

use App\Models\tangkapan;
use Illuminate\Http\Request;

class TangkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tangkapan = tangkapan::all();
        return view('histori',compact('tangkapan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inputHasil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tangkapan = new tangkapan();
        $tangkapan->tanggal = $request->tanggal;
        $tangkapan->berat = $request->berat;
        $tangkapan->jenis = $request->jenis;
        $tangkapan->harga = $request->harga;
        $tangkapan->catatan = $request->catatan;
        $tangkapan->save();
        return redirect('/histori')->with('success', 'Data tangkapan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(tangkapan $tangkapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tkp = tangkapan::find($id);
        if (!$tkp) {
            return redirect('/histori')->with('error', 'Data tangkapan tidak ditemukan');
        }
        return view('editHasil',compact('tkp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tangkapan = tangkapan::find($id);
        if (!$tangkapan) {
            return redirect('/histori')->with('error', 'Data tangkapan tidak ditemukan');
        }
        // $tangkapan->tanggal = $request->tanggal;
        // $tangkapan->berat = $request->berat;
        // $tangkapan->jenis = $request->jenis;
        // $tangkapan->harga = $request->harga;
        // $tangkapan->catatan = $request->catatan;
        // $tangkapan->save();

        $tangkapan->update($request->all());
        return redirect('/histori')->with('success', 'Data tangkapan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tangkapan = tangkapan::find($id);
        $tangkapan->delete();
        return redirect('/histori')->with('success', 'Data tangkapan berhasil dihapus');
    }
}
