<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Socialite;
class GoogleAuthController extends Controller
{
     
/**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
  public function redirect(){
      
      return Socialite::driver('google')->redirect();
    }

    public function callback(){
      $data = Socialite::driver('google')->user();
      $user = User::where('email', $data->email)->first();
      if($user){

        Auth::loginUsingId($user->id);


      	if (Auth::user()->role =='student'){
          
      	 return redirect('/student/dashboard');

      	}
      	return redirect('/lecturer/dashboard');
     

      }
      else{

                         
        $newuser = new User();
        $newuser->name = $data->name;
        $newuser->email = $data->email;
        $newuser->password = uniqid(0,8);
        $newuser->save();
      
        Auth::loginUsingId($newuser->id);
       return redirect('/verify')->with('success', 'Successfully logged in!');
      }
    }
}

//facebook app created service providers and aliases registered route created, post ui created 
