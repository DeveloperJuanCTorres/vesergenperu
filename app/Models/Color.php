<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Color extends Model
{
    
    public function product()
    {
        return  $this->belongsToMany(Product::class,'color_products','color_id');
    }
}
