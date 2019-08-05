<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function post(){

         return $this->belongsToMany('App\post','post_tags')->orderBy('created_at','DESC')->paginate(5);
    }

    public function getRouteKeyName(){

          return 'slug';
     }
}
