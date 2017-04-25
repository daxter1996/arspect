<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
