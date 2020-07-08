<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



// Route::get('login/{provider}', 'SocialController@redirect');
// Route::get('login/{provider}/callback','SocialController@Callback');
 


//register the /facebookcallback on developers.facebook.com
Route::get('/redirect', 'FacebookAuthController@redirect');
Route::get('/facebookcallback', 'FacebookAuthController@callback');


//register the /googlecallback on google console
Route::get('/googleredirect', 'GoogleAuthController@redirect');
Route::get('/googlecallback/{role}', 'GoogleAuthController@callback');



Route::get('/verifyrole', 'HomeController@verifyrole')->middleware('auth');

Route::post('/storerole', 'HomeController@updateRole')->middleware('auth');


Route::get('/teacher/dashboard', 'HomeController@teacher')->middleware(['auth', 'role', 'teacher']);

Route::get('/lecturer/dashboard', 'HomeController@lecturer')->middleware(['auth', 'role', 'leacturer']);

