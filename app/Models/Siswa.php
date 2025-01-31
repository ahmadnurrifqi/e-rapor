<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public function rapor(): HasMany
    {
        return $this->hasMany(Rapor::class);
    }

    public function ekskulMember(): HasMany
    {
        return $this->hasMany(EkskulMember::class);
    }
}
