<?php

use App\Models\Pendaftar;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->uuid('pendaftar_id')->references('id')->on('pendaftar')->onDelete('cascade');
            $table->string('unique_id',50);
            $table->string('transaction_id',50);
            $table->string('status',10);
            $table->integer('total_amount');
            $table->integer('tax');
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
