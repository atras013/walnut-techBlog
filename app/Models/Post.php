<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user() {

        return $this->belongsTo("App\Models\User");
    }

    public function categories() {

        return $this->belongsToMany('App\Models\Category');
    }

    public function tags() {
         
        return $this->belongsToMany('App\Models\Tag' , 'tag_post');
   }

   public function getPostImageAttribute($value) {
        
         if(strpos($value , 'https://')  == TRUE || strpos($value , 'http://')  == TRUE ) {

             return $value;
         }

         
        

         return asset('storage/' . $value );


   }

   public function getCreatedAtAttribute($value) {


    $v = Verta::instance( $value  );

    $m = $v->formatWord(' F ');

    return $v->day . $m . $v->year;

   }
}
