<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MapelRapor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function nilaiPengetahuanC3(): BelongsTo
    {
        return $this->belongsTo(NilaiPengetahuanC3::class, 'nilai_pengetahuan_c3_s_id');
    }

    public function nilaiKeterampilanC4(): BelongsTo
    {
        return $this->belongsTo(NilaiKeterampilanC4::class, 'nilai_keterampilan_c4_s_id');
    }
}
