<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   protected $guarded = [];

    public function profileImage()
    {

        $imagePath = ($this->image) ? $this->image : 'profile/U0JGPXBLAXtpKrRYo9o3xCBFgFxy45koKxgbhI6g.jpeg';

        return '/storage/' . $imagePath;
        
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
