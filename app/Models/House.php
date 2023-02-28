<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class House extends Model
{
    protected $fillable = [
        'id',
        'house_name',
        'price_for_1sqr_per_meter',
        'construction_date',
        'common_count_of_flats'
    ];

    public function flat(): HasMany
    {
        return $this->hasMany(Flat::class);
    }
    public function sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
