<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(DataDiri $dataDiri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = DataDiri::find($id);
        return view('editDataDiri',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = DataDiri::find($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->tanggal_lahir = $request->tgl;
        $data->jenis_kelamin = $request->jk;
        $data->status_pernikahan = $request->sp;
        $data->pengalaman_kerja = $request->pk;
        $data->telepon_wa = $request->tlp;
        $data->email = $request->email;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect('/dataDiri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataDiri $dataDiri)
    {
        //
    }
}
