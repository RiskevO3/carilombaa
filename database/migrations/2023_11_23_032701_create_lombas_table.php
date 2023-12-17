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
        Schema::create('lombas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(User::class)->constrained('users')->cascadeOnDelete();
            $table->string('image_url');
            $table->string('title','30');
            $table->string('short_description','100');
            $table->string('description','700');
            $table->integer('minimum_person');
            $table->integer('maximum_person');
            $table->timestamp('start_date')->useCurrent();
            $table->timestamp('end_date')->useCurrent();
            $table->timestamp('registration_start_date')->useCurrent();
            $table->timestamp('registration_end_date')->useCurrent();
            $table->integer('registration_fee');
            $table->boolean('is_approved');
            $table->boolean('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lombas');
    }
};
