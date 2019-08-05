<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function post(){

        return $this->belongsToMany('App\post','category_posts')->orderBy('created_at','DESC')->paginate(5);
    }

    public function getRouteKeyName(){

    	return 'slug';
    }
}
