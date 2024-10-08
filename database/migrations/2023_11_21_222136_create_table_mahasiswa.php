<?php

use App\Models\User;
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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('jenis_kelamin',2)->require();
            $table->string('headline',255)->require();
            $table->string('universitas',50)->require();
            $table->string('nim',50)->require();
            $table->integer('semester')->require();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
