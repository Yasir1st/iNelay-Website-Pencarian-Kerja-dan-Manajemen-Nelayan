<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NelayanController;
use App\Http\Controllers\TangkapanController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\AkunController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['guest'])->group(function () {
    Route::get('/', [AkunController::class, 'index'])->name('login');
    Route::post('/', [AkunController::class, 'login']);
    Route::get('/daftar', [AkunController::class, 'create']);
    Route::post('/inputUser', [AkunController::class, 'store'])->name('input.user');
});

Route::get('/home', function(){
    return redirect('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [NelayanController::class, 'index']);

    Route::get('/lowongan', [NelayanController::class, 'lowongan']);
    Route::get('/lowonganSelengkapnya', [NelayanController::class, 'lowonganSelengkapnya']);

    Route::get('/profilKapal', [NelayanController::class, 'profilKapal']);
    Route::get('/anggota', [NelayanController::class, 'anggota']);
    Route::get('/inputHasil', [TangkapanController::class, 'create']);
    Route::get('/histori', [TangkapanController::class, 'index']);
    Route::get('/editHasil/{id}', [TangkapanController::class, 'edit'])->name('edit.hasil');
    Route::put('/updateHasil/{id}', [TangkapanController::class, 'update'])->name('update.hasil');
    Route::delete('/hapusHasil/{id}', [TangkapanController::class, 'destroy'])->name('hapus.hasil');


    Route::get('/dataDiri', [NelayanController::class, 'dataDiri']);
    Route::get('/editDataDiri/{id}', [DataDiriController::class, 'edit'])->name('edit.dd');
    Route::put('/updateDataDiri/{id}', [DataDiriController::class, 'update'])->name('update.dd');

    Route::get('/logout', [AkunController::class, 'logout']);

    Route::post('/edit-profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('/inputHasil', [TangkapanController::class, 'store'])->name('input.hasil');

});




