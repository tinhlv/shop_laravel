<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function Categories ()
    {
        return $this->belongsTo('App\Categories');
    }
}
