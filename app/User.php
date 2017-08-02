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
        'name', 'email', 'password','surname','type','active'
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

    public function events(){
        return $this->hasMany( Event::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function obras(){
        return $this->hasMany(Obra::class);
    }

    public function addTag($tagName){
        $tag = Tag::where('type', $tagName)->get();
        if(count($tag) > 0){
            return $this->tags()->attach($tag[0]->id);
        }else{
            $newTag = new Tag;
            $newTag->type = $tagName;
            $newTag->save();
            return $this->tags()->attach($newTag->id);
        }

    }

    public function removeTag($tagName){
        $tag = Tag::where('type', $tagName)->get()->pluck('id');
        return $this->tags()->detach($tag);
    }

    public function extraInfo(){
        return $this->hasOne(ExtraInfo::class);
    }
}
