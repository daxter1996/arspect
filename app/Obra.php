<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    //

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
