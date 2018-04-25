<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   //
    public function publication()
    {
        return $this->hasMany('App\Publication');
    }

    public function tuto()
    {
        return $this->hasMany('App\Publication')->where('type','=','tutorial');
    }

    public function best()
    {
        return $this->hasOne('App\Publication')->where('type','=','tutorial');
    }

    public function post()
    {
        return $this->hasMany('App\Publication')->where('type','=','post');
    }

}
