<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //

    public function logOut(Request $request) {
          
         Auth::logout();

         return redirect('/home');

    }
}
