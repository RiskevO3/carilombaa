<?php

use App\Models\Category;
use App\Models\Lomba;
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
        Schema::table('categories_lombas', function (Blueprint $table) {
            $table->dropColumn('lomba_id');
            $table->dropColumn('category_id');
        });
        Schema::rename('categories_lombas', 'category_lomba');
        Schema::table('category_lomba', function (Blueprint $table) {
            $table->uuid('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->uuid('lomba_id')->references('id')->on('lombas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('category_lomba', function (Blueprint $table) {
            //
        });
    }
};
