<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = ['id', 'country_name', 'country_code', 'country_area', 'country_map'];

    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
