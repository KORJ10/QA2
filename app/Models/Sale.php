<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sale extends Model
{
   protected $fillable = ['id','sale_date','client_id','flat_id','house_id'];

   public function client(): HasOne
   {
       return $this->hasOne(Client::class);
   }
    public function house(): HasMany
    {
       return $this->hasMany(House::class);
    }
    public function flat(): HasMany
    {
       return $this->hasMany(Flat::class);
    }
}
