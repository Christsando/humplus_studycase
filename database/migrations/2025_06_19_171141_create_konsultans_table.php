<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultansTable extends Migration
{
    public function up()
    {
        Schema::create('konsultans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('inisial', 10)->nullable(); // contoh: AG
            $table->string('spesialisasi')->nullable(); // contoh: Konsultan Personal
            $table->string('warna_gradiasi')->nullable(); // contoh: from-blue-500 to-purple-600
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('konsultans');
    }
};
