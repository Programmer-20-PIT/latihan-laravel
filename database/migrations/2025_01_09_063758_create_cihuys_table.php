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
        Schema::create('prajurits', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('jumlah_orang')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('email')->unique();
            $table->string('web')->nullable();
            $table->integer('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cihuys');
    }
};
