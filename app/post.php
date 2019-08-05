<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
     public function tags(){

    return  $this->belongsToMany('App\tag','post_tags')->withTimeStamps();
 
}
     public function categories(){

        return $this->belongsToMany('App\category','category_posts')->withTimeStamps();
     }

     public function getRouteKeyName(){

          return 'slug';
     }

}