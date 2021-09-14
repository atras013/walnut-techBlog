<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'id',
        'username',
        'avatar',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() {

         return $this->belongsToMany('App\Models\Role');
    }

    public function hasRole() {
        
         $user =  Auth::user();

         foreach( $user->roles as $user_role ) { 

               if( $user_role->name == 'Admin' || $user_role->name == 'Author' ) {  
                    
                  return true;
               }
               else {
                
                 return false;
               }
         }
         
    }


    public function isAdmin() {

           foreach($this->roles as $role) {
                
                    return  $role->name == "Admin";
           }
        
         
    }

   public function getAvatarAttribute($value) {
        
       if(strpos($value , 'https://') == TRUE || strpos($value , 'http://') == TRUE ) { 
            
           return $value;
       }
        
       
      return asset('storage/' . $value );
   }

   public function posts() {

      return $this->hasMany('App\Models\Post');
   }

}
