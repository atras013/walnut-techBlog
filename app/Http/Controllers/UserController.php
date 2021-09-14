<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
   
    public function show(User $user) {

         return view("admin.users.user-profile" , ['user' => $user ]);
    }

    
    public function update(User $user) {
       
        $inputs = request()->validate([ 
             
            'username' => ['required' , 'string' , 'max:255' , 'alpha_dash'] , 
            'name' => ['required' , 'string' , 'max:255'],
            'email' => [ 'required' , 'max:255'],
            'avatar' => ['file'],
            'password' => [

               'nullable',
               'min:8',
               'max:20'
                
               ]
             
        ]);
         
        if(request('avatar')) { 
             
             
            if($user->avatar !== "http://127.0.0.1:8000/storage" ) {
                $result =   str_replace('http://127.0.0.1:8000/' , "" , $user->avatar );
               
                unlink( $result);
            }
              
            $inputs['avatar'] = request('avatar')->store('images');

        }

        if(request('password')) { 
              
          $inputs['password'] = bcrypt( request('password') );
             
        }
        else {
            $inputs['password'] = $user->password;
        }
         
        $user->update($inputs);
        
        return redirect()->back();
    }
      
}
