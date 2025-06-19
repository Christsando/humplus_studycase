<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('booking_id')->unique();
            $table->string('konsultan');
            $table->string('jenis_konsultasi');
            $table->date('tanggal');
            $table->string('jam');
            $table->text('catatan')->nullable();
            $table->string('status')->default('confirmed'); // Langsung tambahkan di sini
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
