<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function teacher(){

        return view('home');
    }

    public function leacturer(){

        return view('home');
    }
    
    //this page return a page for the user to select his role
    public function verifyrole(){
         
        //note you will set a form submitting post request to update role

        return view('verifyrole');
    }

    public function updateRole(Request $request){
         

        $user = Auth::user();

        $user->role = $request->role;

        $user->save();

        return redirect()->back();

    }


}
