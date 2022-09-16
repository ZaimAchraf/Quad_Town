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
        "lastname",
        "email",
        "phone",
        "time",
        "date",
        "nbr_children",
        "nbr_adults",
        "note",
    ];
}
