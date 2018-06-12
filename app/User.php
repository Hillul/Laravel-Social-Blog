<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
    //
    protected $table = 'users';
    use \Illuminate\Auth\Authenticatable;
    public function posts(){
    	return $this->hasMany('App\Post');
    }
    public function likes(){
    	return $this->hasMany('App\Like');
    }
}
