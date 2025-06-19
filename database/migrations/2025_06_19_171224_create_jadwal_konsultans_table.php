<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKonsultansTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal_konsultans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konsultan_id')->constrained('konsultans')->onDelete('cascade');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_konsultans');
    }
};
