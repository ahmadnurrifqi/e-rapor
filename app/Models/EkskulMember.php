<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EkskulMember extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ekskul(): BelongsTo
    {
        return $this->belongsTo(Ekstrakurikular::class);
    }

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
}
