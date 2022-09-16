<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "type",
        "picture",
        "price",
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class,"vehicle_id");
    }
}
