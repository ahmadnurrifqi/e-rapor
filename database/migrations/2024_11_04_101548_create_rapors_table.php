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
        Schema::create('rapors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained()->onDelete('cascade');
            $table->foreignId('tahun_ajaran_id')->constrained()->onDelete('cascade');
            $table->text('sikap_spiritual');
            $table->integer('total_nilai');
            $table->integer('rata_rata');
            $table->integer('peringkat');
            $table->text('catatan_wali_kelas');
            $table->integer('sakit');
            $table->integer('izin');
            $table->integer('tanpa_keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapors');
    }
};
