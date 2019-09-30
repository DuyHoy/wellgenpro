<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //

    public function category()
    {
        return $this->belongsTo(Categories::class,'categories_id');
    }
    public function images()
    {
        return $this->hasMany(Posts::class);
      
    }
}
