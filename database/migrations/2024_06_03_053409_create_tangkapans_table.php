<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tangkapans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('berat');
            $table->String('jenis');
            $table->integer('harga');
            $table->String('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tangkapans');
    }
};
