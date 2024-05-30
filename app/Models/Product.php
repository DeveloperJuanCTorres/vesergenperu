<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    
    public function size()
    {
        return  $this->belongsToMany(Size::class,'product_sizes','product_id');
    }

    public function color()
    {
        return  $this->belongsToMany(Color::class,'color_products','product_id');
    }
}
