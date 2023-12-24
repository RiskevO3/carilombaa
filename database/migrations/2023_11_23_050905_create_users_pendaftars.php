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
        Schema::create('mahasiswa_pendaftar', function (Blueprint $table) {
            $table->id();
            $table->uuid('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->uuid('pendaftar_id')->references('id')->on('pendaftar')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_pendaftar');
    }
};
