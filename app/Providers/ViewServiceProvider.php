<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\DataDiri;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       // Menggunakan View Composer untuk semua view
       View::composer('*', function ($view) {
            $dataDiri = DataDiri::all(); // Mengambil semua data dari model DataDiri
            $view->with('data_diri', $dataDiri); // Mengirimkan data ke semua view
        });
    }
}
