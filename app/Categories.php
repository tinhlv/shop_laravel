<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function Products()
    {
        return $this->hasMany('App\Products', 'categories_id');
    }
}
