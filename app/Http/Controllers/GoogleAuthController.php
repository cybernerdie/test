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

          Auth::login($user);
          return redirect('/verify')->with('success', 'Successfully logged in!');
        }else{

            if(!$user){
                           
              $user = new User();
              $user->name = $data->name;
              $user->email = $data->email;
              $user->password = uniqid(0,8);
              $user->save();
            }
              Auth::login($user);
        }
        return redirect('/verify')->with('success', 'Successfully logged in!');
    }
}

//facebook app created service providers and aliases registered route created, post ui created 
