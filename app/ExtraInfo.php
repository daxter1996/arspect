<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraInfo extends Model
{
    //

    public function user(){
        return $this->belongsTo(User::class);
    }
}
