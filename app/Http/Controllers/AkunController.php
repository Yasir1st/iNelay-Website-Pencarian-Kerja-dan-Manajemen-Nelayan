<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\DataDiri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email Wajib Di Isi',
            'password.required'=>'Password Wajib Di Isi',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('/dashboard');
        }else{
            return redirect('/')->withErrors('Username Atau Password Tidak Sesuai')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('daftar');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $akun = new User();
        $akun->name = $request->nama;
        $akun->email = $request->email;
        $akun->password = $request->password;
        $akun->role = $request->role;
        $akun->save();
        
        $data = new DataDiri();
        $data->nama = $request->nama;
        $data->alamat = " ";
        $data->tanggal_lahir = '2024-01-01';
        $data->jenis_kelamin = "Perempuan";
        $data->status_pernikahan = " ";
        $data->pengalaman_kerja = " ";
        $data->email = $request->email;
        $data->telepon_wa = " ";
        $data->deskripsi = " ";
        $data->save();

        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akun $akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akun $akun)
    {
        //
    }

}
