<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "server_id",
        "price",
        "period"
    ];

    public function server(): BelongsTo
    {
        return $this->belongsTo(Server::class, "server_id");
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class,"package_id");
    }
}
