<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function user(){
        return $this->hasOne(User::class);
    }


    public function add($info){

    }
}
