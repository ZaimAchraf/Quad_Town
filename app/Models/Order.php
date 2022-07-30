<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "firstname",
        "package_id",
        "lastname",
        "email",
        "phone",
        "address",
        "city",
        "country",
        "postal",
        "note",
        "total"
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, "package_id");
    }
}
