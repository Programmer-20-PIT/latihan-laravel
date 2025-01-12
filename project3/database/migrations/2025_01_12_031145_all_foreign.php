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
        Schema::table('desas', function (Blueprint $table){
            $table->foreignId('kota_id')->after('id')->references('id')->on('kotas')->onDelete('cascade');
        });

        Schema::table('universitas', function (Blueprint $table){
            $table->foreignId('desa_id')->after('id')->references('id')->on('desas')->onDelete('cascade');
        });

        Schema::table('users', function (Blueprint $table){
            $table->foreignId('universitas_id')->after('id')->references('id')->on('universitas')->onDelete('cascade');
            $table->foreignId('desa_id')->after('universitas_id')->references('id')->on('desas')->onDelete('cascade');
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
