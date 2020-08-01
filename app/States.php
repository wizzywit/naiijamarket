<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    //
    public function shop()
    {
        return $this->hasMany(Shop::class,'location_id');
    }

}
