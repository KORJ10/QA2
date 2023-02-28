<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flat extends Model
{
    protected $fillable = ['id','price_for_1sqr_per_meter','floor','count_of_room'];

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }
    public function sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
