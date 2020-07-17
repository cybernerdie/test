<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function student(){

        return view('student/dashboard');
    }

    public function lecturer(){

        return view('lecturer/dashboard');
    }
    
    //this page return a page for the user to select his role
    public function verifyrole(){
         
        //note you will set a form submitting post request to update role

        return view('auth.verify');
    }

    public function updaterole(Request $request){
         

        $user = Auth::user();
        $userRole = Auth::user()->role;

        $user->role = $request->role;

        $user->save();

        if($userRole=='student'){
            return redirect ('/student/dashboard');
        }
        else{
            return redirect('/lecturer/dashboard');
        }

    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }

}
