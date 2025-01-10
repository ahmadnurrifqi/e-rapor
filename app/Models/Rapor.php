<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rapor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function tahunAjaran(): BelongsTo
    {
        return $this->belongsTo(TahunAjaran::class);
    }

    public function prestasi(): HasMany
    {
        return $this->hasMany(Prestasi::class);
    }

    public function mapelRapor(): HasMany
    {
        return $this->hasMany(MapelRapor::class);
    }

    public function predikatEkskul(): HasMany
    {
        return $this->hasMany(PredikatEkstrakurikular::class);
    }
}
