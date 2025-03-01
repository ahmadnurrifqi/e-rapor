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
        Schema::create('nilai_pengetahuan_c3_s', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai')->nullable();
            $table->integer('kkm')->nullable();
            $table->char('predikat',3)->nullable();
            $table->text('deskripsi',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_pengetahuan_c3_s');
    }
};
