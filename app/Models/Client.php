<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    protected $fillable = ['id','full_name','phone_number','email'];

    public function sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
