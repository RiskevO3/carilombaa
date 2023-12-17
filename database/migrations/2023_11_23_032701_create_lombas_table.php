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
        Schema::create('lomba', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('slug',50)->unique();
            $table->uuid('penyelenggara_id')->references('id')->on('penyelenggara')->onDelete('cascade');
            $table->uuid('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->string('image');
            $table->string('title','30');
            $table->string('short_description','100');
            $table->longText('description');
            $table->integer('minimum_person');
            $table->integer('maximum_person');
            $table->date('start_date')->require();
            $table->date('end_date')->require();
            $table->date('registration_start_date')->require();
            $table->date('registration_end_date')->require();
            $table->integer('registration_fee');
            $table->boolean('is_approved');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lomba');
    }
};
