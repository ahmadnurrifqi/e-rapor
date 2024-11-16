<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rapor(): BelongsTo
    {
        return $this->belongsTo(Rapor::class);
    }
}
