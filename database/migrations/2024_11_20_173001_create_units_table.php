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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_id')->unique(); 
            $table->string('name'); 
            $table->string('kabupaten'); 
            $table->string('provinsi'); 
            $table->bigInteger('harga'); 
            $table->integer('jumlah_kamar'); 
            $table->integer('luas_bangunan'); 
            $table->integer('luas_lahan'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
