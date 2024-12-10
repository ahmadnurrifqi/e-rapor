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
        Schema::create('nilai_keterampilan_c4_s', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai')->nullable();
            $table->integer('kkm')->nullable();
            $table->char('predikat')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_keterampilan_c4_s');
    }
};
