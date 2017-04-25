<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function obras(){
        return $this->belongsToMany(Obra::class);
    }

    public function galleries(){
        return $this->belongsToMany(Gallery::class);
    }
}
