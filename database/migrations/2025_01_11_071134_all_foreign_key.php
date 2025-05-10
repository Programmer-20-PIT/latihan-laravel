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
        Schema::table ('kotas', function (Blueprint $table) {
            $table->foreignId('negara_id')->after('id')->references('id')->on('negaras')->onDelete('cascade')->nullable();
        });
        Schema::table ('sekolahs', function (Blueprint $table) {
            $table->foreignId('kota_id')->after('id')->references('id')->on('kotas')->onDelete('cascade')->nullable();
        });
        Schema::table ('users', function (Blueprint $table) {
            $table->foreignId('kota_id')->after('id')->references('id')->on('kotas')->onDelete('cascade')->nullable();
            $table->foreignId('sekolah_id')->after('id')->references('id')->on('sekolahs')->onDelete('cascade')->nullable();
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
