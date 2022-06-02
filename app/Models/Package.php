<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
