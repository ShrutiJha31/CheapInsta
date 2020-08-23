<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
   
    protected $guarded=[];//telling laravel no need to secure me,I am at my own risk  
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
