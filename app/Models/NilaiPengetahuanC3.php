<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NilaiPengetahuanC3 extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mapelRapor(): HasMany
    {
        return $this->hasMany(MapelRapor::class);
    }
}
