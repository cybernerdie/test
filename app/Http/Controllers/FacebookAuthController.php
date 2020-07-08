<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Socialite;
class FacebookAuthController extends Controller
{
     
/**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
  public function redirect()
  {
      return Socialite::driver('facebook')->redirect();
  }
  /**
   * Return a callback method from facebook api.
   *
   * @return callback URL from facebook
   */
  public function callback()
  {
    $data = Socialite::driver('facebook')->user();
  

    $user = User::where('facebook_id', $data->id)->first();

    if($user) {
    Auth::login($user);
    
    } 

    else {
      $user = User::where('facebook_id', $data->id)->first();

      if(!$user){
        // Create a new user
        //if the facebookid of the facebookuser is empty create a new user with the below
        $user = new User();
        $user->name = $data->user['name'];
        $user->email = is_null($data->email) || $data->email == ' ' ? '' : $data->email;
        $user->password = uniqid(0,8);
        $user->email = $email;
        $user->facebook_id = $data->id;
        $user->save();
      }

      Auth::login($user);
    }

      return redirect('teacher/dashboard')->with('success', 'Successfully logged in!');
    }
}

//f