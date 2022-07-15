<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";
    protected $fillable = [
        "city",
        "city_asci",
        "lat",
        "lng",
        "country",
        "iso2",
        "iso3",
        "admin_name",
        "capital",
        "population",
        "id"
    ];
}
