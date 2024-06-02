<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function villages()
    {
        return $this->hasMany(Village::class, 'district_id');
    }
}
