<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    
    public function category()
    {
        return $this->hasOne(Category::class, 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
}
