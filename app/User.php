<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','dni','surname','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function galleries(){
        return $this->belongsToMany(Gallery::class);
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class, 'followers', 'follow_id', 'user_id');
    }

    public function following(){
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follow_id')->withTimestamps();
    }
}
