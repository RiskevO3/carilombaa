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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('phone')->require()->after('email')->default('081234567890');
            $table->string('role')->require()->after('phone')->default('mahasiswa');
            $table->boolean('is_verified')->require()->after('role')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            //
            $table->dropColumn('phone');
            $table->dropColumn('role');
            $table->dropColumn('is_verified');
        });
    }
};
