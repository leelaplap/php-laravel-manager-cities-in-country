<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'Cities';
    protected $fillable = ['id', 'city_name', 'city_desc', 'city_image', 'country_id'];

    public function Country()
    {
        return $this->belongsTo('App\Country');
    }
}
