<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Server extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "Server_name",
        "description"
    ];

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class,"server_id");
    }
}
