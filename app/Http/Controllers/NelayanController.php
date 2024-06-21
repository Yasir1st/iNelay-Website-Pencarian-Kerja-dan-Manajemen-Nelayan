<?php

namespace App\Http\Controllers;

use App\Models\nelayan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NelayanController extends Controller
{
    /**Lowogan */
    public function lowongan()
    {
        return view('lowongan');
    }

    /**Lowogan Selengkapnya*/
    public function lowonganSelengkapnya()
    {
        return view('lowonganSelengkapnya');
    }

    /**Profil Kapal*/
    public function profilKapal()
    {
        return view('profilKapal');
    }

    /**Anggota*/
    public function anggota()
    {
        return view('anggota');
    }

    // Input Hasil
    public function inputHasil()
    {
        return view('inputHasil');
    }

    // Histori
    // public function histori()
    // {

    // }

    // Data Diri
    public function dataDiri()
    {
        return view('dataDiri');
    }

    // Edit Data Diri
    public function editDataDiri()
    {
        
    }

    // Login
    public function daftar()
    {
        return view('daftar');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akun = Auth::user();
        return view('index',compact('akun'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(nelayan $nelayan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nelayan $nelayan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nelayan $nelayan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nelayan $nelayan)
    {
        //
    }
}
