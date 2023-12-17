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
        Schema::table('users_pendaftars', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('pendaftar_id');
        });
        Schema::rename('users_pendaftars', 'user_pendaftar');
        Schema::table('user_pendaftar', function (Blueprint $table) {
            $table->uuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('pendaftar_id')->references('id')->on('pendaftars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_pendaftar', function (Blueprint $table) {
            //
        });
    }
};
