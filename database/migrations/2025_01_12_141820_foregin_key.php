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
        Schema::table("kelas2s", function (Blueprint $table) {
        $table->foreignId('kelas3_id')->after('id')->references('id')->on('kelas3s')->nullable()->onDelete('cascade');
    });
    Schema::table("kelas1s", function (Blueprint $table) {
        $table->foreignId('kelas3_id')->after('id')->references('id')->on('kelas3s')->nullable()->onDelete('cascade');
        $table->foreignId('kelas2_id')->after('id')->references('id')->on('kelas2s')->nullable()->onDelete('cascade');
   });
    Schema::table("users", function (Blueprint $table) {
        $table->foreignId('kelas2_id')->after('id')->references('id')->on('kelas2s')->nullable()->onDelete('cascade');
        $table->foreignId('kelas1_id')->after('id')->references('id')->on('kelas1s')->nullable()->onDelete('cascade');
});

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
