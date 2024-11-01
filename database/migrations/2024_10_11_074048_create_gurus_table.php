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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string("nik");
            $table->string("nuptk");
            $table->string("npy");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->string("jenis_kelamin");
            $table->string("agama");
            $table->string("studi_terakhir");
            $table->string("tahun_gabung");
            $table->string("alamat");
            $table->string("no_telp");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
