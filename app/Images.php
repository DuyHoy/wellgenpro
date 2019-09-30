<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'img', 
       
    ];
    //
    public function posts()
    {
        return $this->belongsTo(Posts::class,'posts_id');
    }
}
