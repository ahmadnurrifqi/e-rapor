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
        Schema::create('predikat_ekstrakurikulars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rapor_id')->constrained()->onDelete('cascade');
            $table->foreignId('ekstrakurikular_id')->constrained()->onDelete('cascade');
            $table->string('predikat');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predikat_ekstrakurikulars');
    }
};
