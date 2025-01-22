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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Foreign key untuk tabel members
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade');

            // Foreign key untuk tabel units
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');

            // $table->unsignedBigInteger('member_id');
            // $table->foreign('member_id')->references('id')->on('members');
            // $table->unsignedBigInteger('unit_id');
            // $table->foreign('unit_id')->references('id')->on('units');

            $table->string('status')->default('on going');
            $table->date('start_date');
            $table->date('end_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
