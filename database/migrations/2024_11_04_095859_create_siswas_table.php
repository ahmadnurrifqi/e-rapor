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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('nama',100);
            $table->string('nis',12);
            $table->string('nisn',11);
            $table->string('tempat_lahir',30);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin',10);
            $table->string('agama',8);
            $table->text('alamat',100);
            $table->string('no_telp',30);
            $table->string('konsentrasi_keahlian',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
