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
            $table->string("nik",18);
            $table->string("nuptk",18)->nullable();
            $table->string("npy",20);
            $table->string("tempat_lahir",30);
            $table->date("tanggal_lahir");
            $table->string("jenis_kelamin",10);
            $table->string("agama",8);
            $table->string("studi_terakhir",8);
            $table->string("tahun_gabung",15);
            $table->string("alamat",100)->nullable();
            $table->string("no_telp",30)->nullable();
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
